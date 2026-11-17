<?php

use JeffersonGoncalves\Filament\LgpdMinors\LgpdMinorsPlugin;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\AgeAssurances\Pages\ListAgeAssurances;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\GuardianLinks\Pages\CreateGuardianLink;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\GuardianLinks\Pages\ListGuardianLinks;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\Pages\CreateSuspension;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\Pages\ListSuspensions;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\SuspensionResource;
use JeffersonGoncalves\Filament\LgpdMinors\Tests\Fixtures\TestUser;
use JeffersonGoncalves\LgpdMinors\Enums\AssuranceMethod;
use JeffersonGoncalves\LgpdMinors\Facades\LgpdMinors;
use JeffersonGoncalves\LgpdMinors\Models\GuardianLink;
use JeffersonGoncalves\LgpdMinors\Models\Suspension;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
    $this->child = TestUser::create(['name' => 'Lia']);
    $this->mother = TestUser::create(['name' => 'Maria']);
});

it('lists age checks with band and method', function () {
    $check = LgpdMinors::assure($this->child, 10, AssuranceMethod::StoreSignal);

    Livewire::test(ListAgeAssurances::class)
        ->assertCanSeeTableRecords([$check])
        ->assertSee('Lia (#2)')
        ->assertSee('Child (under 12)')
        ->assertSee('App store signal');
});

it('links a verified guardian', function () {
    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->mother->id, 'relationship' => 'mother', 'verified' => true])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(GuardianLink::sole())
        ->relationship->toBe('mother')
        ->verified_at->not->toBeNull()
        ->and(LgpdMinors::hasGuardian($this->child))->toBeTrue();
});

it('does not link someone to themselves', function () {
    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->child->id])
        ->call('create')
        ->assertHasFormErrors(['guardian_id' => 'different']);
});

it('verifies and revokes a link', function () {
    $link = LgpdMinors::link($this->child, $this->mother);

    Livewire::test(ListGuardianLinks::class)
        ->assertSee('Pending verification')
        ->callTableAction('verify', $link);

    expect($link->fresh()->isActive())->toBeTrue();

    Livewire::test(ListGuardianLinks::class)->callTableAction('revoke', $link);

    expect($link->fresh()->revoked_at)->not->toBeNull();
});

it('suspends, records the appeal and lifts', function () {
    Livewire::test(CreateSuspension::class)
        ->fillForm(['subject_id' => $this->child->id, 'reason' => 'Photos suggest a child.'])
        ->call('create')
        ->assertHasNoFormErrors();

    $suspension = Suspension::sole();
    expect(LgpdMinors::isSuspended($this->child))->toBeTrue();

    Livewire::test(ListSuspensions::class)
        ->callTableAction('appeal', $suspension, ['appeal' => 'I am 19.']);

    expect($suspension->fresh()->awaitsDecision())->toBeTrue()
        ->and(SuspensionResource::getNavigationBadge())->toBe('1');

    Livewire::test(ListSuspensions::class)
        ->assertSee('Appeal to decide')
        ->callTableAction('lift', $suspension, ['decision' => 'Document checked.']);

    expect($suspension->fresh())->outcome->toBe(Suspension::LIFTED)->decision->toBe('Document checked.')
        ->and(LgpdMinors::isSuspended($this->child))->toBeFalse();
});

it('upholds a suspension', function () {
    $suspension = LgpdMinors::suspend($this->child, 'Reason');

    Livewire::test(ListSuspensions::class)
        ->callTableAction('uphold', $suspension, ['decision' => 'Confirmed.']);

    expect($suspension->fresh()->outcome)->toBe(Suspension::UPHELD)
        ->and(LgpdMinors::isSuspended($this->child))->toBeTrue();
});

it('applies the fluent plugin options', function () {
    LgpdMinorsPlugin::get()->navigationGroup('LGPD')->subjectTitleAttribute('email');

    expect(SuspensionResource::getNavigationGroup())->toBe('LGPD')
        ->and(LgpdMinorsPlugin::get()->getSubjectModel())->toBe(TestUser::class);
});

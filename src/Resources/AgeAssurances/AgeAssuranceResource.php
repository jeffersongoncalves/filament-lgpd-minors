<?php

namespace JeffersonGoncalves\Filament\LgpdMinors\Resources\AgeAssurances;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\LgpdMinors\LgpdMinorsPlugin;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\AgeAssurances\Pages\ListAgeAssurances;
use JeffersonGoncalves\Filament\LgpdMinors\Support\Labels;
use JeffersonGoncalves\LgpdMinors\Enums\AgeBand;
use JeffersonGoncalves\LgpdMinors\Enums\AssuranceMethod;
use JeffersonGoncalves\LgpdMinors\Models\AgeAssurance;

/**
 * Read-only: results come from your app's age check flow, never typed in by hand.
 */
class AgeAssuranceResource extends Resource
{
    protected static ?string $model = AgeAssurance::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-identification';

    protected static ?string $slug = 'age-assurances';

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->with('subject'))
            ->columns([
                TextColumn::make('subject_id')
                    ->label(Labels::get('fields.subject'))
                    ->formatStateUsing(fn (AgeAssurance $record): string => Labels::subject($record->subject, $record->subject_id)),
                TextColumn::make('band')
                    ->label(Labels::get('fields.band'))
                    ->formatStateUsing(fn (AgeBand $state): string => Labels::get("bands.{$state->value}"))
                    ->color(fn (AgeBand $state): string => Labels::bandColor($state))
                    ->badge(),
                TextColumn::make('method')
                    ->label(Labels::get('fields.method'))
                    ->formatStateUsing(fn (AssuranceMethod $state): string => Labels::get("methods.{$state->value}"))
                    ->description(fn (AgeAssurance $record): string => $record->method->isReliable() ? Labels::get('fields.reliable') : Labels::get('fields.not_reliable')),
                TextColumn::make('provider')
                    ->label(Labels::get('fields.provider'))
                    ->placeholder('-'),
                TextColumn::make('assured_at')
                    ->label(Labels::get('fields.assured_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('expires_at')
                    ->label(Labels::get('fields.expires_at'))
                    ->dateTime()
                    ->placeholder(Labels::get('fields.never'))
                    ->sortable(),
            ])
            ->defaultSort('assured_at', 'desc')
            ->filters([
                SelectFilter::make('band')
                    ->label(Labels::get('fields.band'))
                    ->options(Labels::options(AgeBand::cases(), 'bands')),
                SelectFilter::make('method')
                    ->label(Labels::get('fields.method'))
                    ->options(Labels::options(AssuranceMethod::cases(), 'methods')),
                TernaryFilter::make('valid')
                    ->label(Labels::get('filters.valid'))
                    ->default(true)
                    ->queries(
                        true: fn (Builder $query): Builder => $query->where(fn (Builder $q) => $q->whereNull('expires_at')->orWhere('expires_at', '>', now())),
                        false: fn (Builder $query): Builder => $query->where('expires_at', '<=', now()),
                    ),
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAgeAssurances::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return Labels::get('assurances.label');
    }

    public static function getPluralModelLabel(): string
    {
        return Labels::get('assurances.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return LgpdMinorsPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return LgpdMinorsPlugin::get()->getNavigationSort();
    }
}

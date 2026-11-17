<?php

namespace JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions;

use BackedEnum;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\LgpdMinors\LgpdMinorsPlugin;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\Pages\CreateSuspension;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\Pages\ListSuspensions;
use JeffersonGoncalves\Filament\LgpdMinors\Support\Labels;
use JeffersonGoncalves\LgpdMinors\Models\Suspension;

class SuspensionResource extends Resource
{
    protected static ?string $model = Suspension::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-lock-closed';

    protected static ?string $slug = 'minor-suspensions';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Labels::subjectSelect('subject_id')
                    ->label(Labels::get('fields.subject')),
                Textarea::make('reason')
                    ->label(Labels::get('fields.reason'))
                    ->helperText(Labels::get('help.reason'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->with('subject'))
            ->columns([
                TextColumn::make('subject_id')
                    ->label(Labels::get('fields.subject'))
                    ->formatStateUsing(fn (Suspension $record): string => Labels::subject($record->subject, $record->subject_id)),
                TextColumn::make('reason')
                    ->label(Labels::get('fields.reason'))
                    ->limit(60)
                    ->wrap(),
                TextColumn::make('status')
                    ->label(Labels::get('fields.status'))
                    ->state(fn (Suspension $record): string => Labels::suspensionStatus($record))
                    ->formatStateUsing(fn (string $state): string => Labels::get("status.{$state}"))
                    ->color(fn (string $state): string => Labels::statusColor($state))
                    ->badge(),
                TextColumn::make('created_at')
                    ->label(Labels::get('fields.suspended_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('appealed_at')
                    ->label(Labels::get('fields.appealed_at'))
                    ->dateTime()
                    ->placeholder('-')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->label(Labels::get('fields.status'))
                    ->options([
                        'in_force' => Labels::get('status.in_force'),
                        'appealed' => Labels::get('status.appealed'),
                        Suspension::LIFTED => Labels::get('status.lifted'),
                        Suspension::UPHELD => Labels::get('status.upheld'),
                    ])
                    ->query(fn (Builder $query, array $data): Builder => match ($data['value'] ?? null) {
                        'in_force' => $query->whereNull('resolved_at')->whereNull('appealed_at'),
                        'appealed' => $query->whereNull('resolved_at')->whereNotNull('appealed_at'),
                        Suspension::LIFTED, Suspension::UPHELD => $query->where('outcome', $data['value']),
                        default => $query,
                    }),
            ])
            ->recordActions([
                ActionGroup::make(SuspensionActions::all()),
            ]);
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSuspensions::route('/'),
            'create' => CreateSuspension::route('/create'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $count = Suspension::query()->scopes('awaitingDecision')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function getModelLabel(): string
    {
        return Labels::get('suspensions.label');
    }

    public static function getPluralModelLabel(): string
    {
        return Labels::get('suspensions.plural_label');
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

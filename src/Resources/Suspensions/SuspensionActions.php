<?php

namespace JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions;

use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use JeffersonGoncalves\Filament\LgpdMinors\Support\Labels;
use JeffersonGoncalves\LgpdMinors\Models\Suspension;

class SuspensionActions
{
    /**
     * @param  class-string<Action|TableAction>  $class
     * @return list<Action|TableAction>
     */
    public static function all(string $class = Action::class): array
    {
        return [static::appeal($class), static::lift($class), static::uphold($class)];
    }

    /** Record an appeal received outside the app (email, support ticket...). */
    public static function appeal(string $class = Action::class): Action|TableAction
    {
        return $class::make('appeal')
            ->label(Labels::get('actions.appeal'))
            ->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->visible(fn (Suspension $record): bool => $record->resolved_at === null && $record->appealed_at === null)
            ->form([
                Textarea::make('appeal')
                    ->label(Labels::get('fields.appeal'))
                    ->required(),
            ])
            ->action(function (Suspension $record, array $data): void {
                $record->appeal($data['appeal']);
                Notification::make()->success()->title(Labels::get('notifications.appealed'))->send();
            });
    }

    public static function lift(string $class = Action::class): Action|TableAction
    {
        return static::decide('lift', 'heroicon-o-lock-open', 'success', $class);
    }

    public static function uphold(string $class = Action::class): Action|TableAction
    {
        return static::decide('uphold', 'heroicon-o-lock-closed', 'danger', $class);
    }

    protected static function decide(string $name, string $icon, string $color, string $class): Action|TableAction
    {
        return $class::make($name)
            ->label(Labels::get("actions.{$name}"))
            ->icon($icon)
            ->color($color)
            ->visible(fn (Suspension $record): bool => $record->resolved_at === null)
            ->modalDescription(fn (Suspension $record): string => filled($record->appeal)
                ? Labels::get('fields.appeal').': '.$record->appeal
                : Labels::get('help.no_appeal'))
            ->form([
                Textarea::make('decision')
                    ->label(Labels::get('fields.decision'))
                    ->required(),
            ])
            ->action(function (Suspension $record, array $data) use ($name): void {
                $name === 'lift' ? $record->lift($data['decision']) : $record->uphold($data['decision']);
                Notification::make()->success()->title(Labels::get("notifications.{$name}"))->send();
            });
    }
}

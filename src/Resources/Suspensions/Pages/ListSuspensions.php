<?php

namespace JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\LgpdMinors\Resources\Suspensions\SuspensionResource;

class ListSuspensions extends ListRecords
{
    protected static string $resource = SuspensionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

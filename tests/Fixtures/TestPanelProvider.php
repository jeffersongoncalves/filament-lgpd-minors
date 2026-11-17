<?php

namespace JeffersonGoncalves\Filament\LgpdMinors\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\LgpdMinors\LgpdMinorsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                LgpdMinorsPlugin::make(),
            ]);
    }
}

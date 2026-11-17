<?php

namespace JeffersonGoncalves\Filament\LgpdMinors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LgpdMinorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-lgpd-minors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}

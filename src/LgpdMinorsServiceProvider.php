<?php

namespace JeffersonGoncalves\Filament\LgpdMinors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdMinorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd-minors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}

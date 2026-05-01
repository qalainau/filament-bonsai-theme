<?php

namespace Qalainau\BonsaiTheme;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BonsaiThemeServiceProvider extends PackageServiceProvider
{
    public static string $name = 'bonsai-theme';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}

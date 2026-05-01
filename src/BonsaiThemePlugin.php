<?php

namespace Because\BonsaiTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Css;

class BonsaiThemePlugin implements Plugin
{
    public static function make(): static
    {
        return new static;
    }

    public function getId(): string
    {
        return 'bonsai-theme';
    }

    public function register(Panel $panel): void
    {
        $panel->assets([
            Css::make('bonsai-theme', __DIR__.'/../resources/css/bonsai.css'),
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}

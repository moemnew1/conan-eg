<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use BezhanSalleh\LanguageSwitch\LanguageSwitch;
use BezhanSalleh\LanguageSwitch\Events\LocaleChanged;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        $this->configureDefaults();

        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['ar', 'en'])
                ->visible(outsidePanels: true);
        });

        // When Filament switches locale, sync session so SetLocale middleware
        // picks it up on the next non-prefixed request
        Event::listen(function (LocaleChanged $event) {
            session(['locale' => $event->locale]);
        });

        // Share locale with every Inertia page
        Inertia::share([
            'locale' => fn () => app()->getLocale(),
        ]);
    }

    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(fn (): ?Password => app()->isProduction()
            ? Password::min(12)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            : null,
        );
    }
}
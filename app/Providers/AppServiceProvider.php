<?php

namespace App\Providers;

use App\Contracts\ContactMessageInterface;
use App\Contracts\NewsCatalogInterface;
use App\Contracts\ServiceCatalogInterface;
use App\Services\ContactMessageService;
use App\Services\MunicipalNewsCatalog;
use App\Services\MunicipalServiceCatalog;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ServiceCatalogInterface::class, MunicipalServiceCatalog::class);
        $this->app->bind(NewsCatalogInterface::class, MunicipalNewsCatalog::class);
        $this->app->bind(ContactMessageInterface::class, ContactMessageService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureDefaults();
    }

    /**
     * Configure default behaviors for production-ready applications.
     */
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

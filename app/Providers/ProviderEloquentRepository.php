<?php

namespace App\Providers;

use App\Repository\OceansRepository as OceansRepositoryInterface;
use App\Repository\Eloquent\OceansRepository;
use Illuminate\Support\ServiceProvider;

class ProviderEloquentRepository extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(
            OceansRepositoryInterface::class,
            OceansRepository::class
        );
    }
}

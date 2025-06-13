<?php

namespace App\Providers;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    public function configureMiddleware(Middleware $middleware): void
{
    $middleware->append(NoCache::class);
}

}
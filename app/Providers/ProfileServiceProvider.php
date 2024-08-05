<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProfileService;

class ProfileServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProfileService::class, function (Application $app) {
            return new ProfileService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

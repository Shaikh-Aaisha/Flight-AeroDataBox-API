<?php

namespace App\Providers;
use App\Services\AeroDataBoxService;
use Illuminate\Support\ServiceProvider;

class AeroDataBoxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //register service class here
        $this->app->singleton(AeroDataBoxService::class, function () {
            return new AeroDataBoxService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

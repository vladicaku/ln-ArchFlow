<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Serivces;

class SongServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->singleton(SongService::class, function () {
            return new SongService();
        });
    }
}

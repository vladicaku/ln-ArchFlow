<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services;

class PlayerServiceProvider extends ServiceProvider
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
         $this->app->singleton(PlayerService::class, function () {
            return new PlayerService(resolve(SongService::class));
        });
    }
}

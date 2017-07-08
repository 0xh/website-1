<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Schema::defaultStringLength(191);

		if(app()->isLocal()) {
			app()->bind(\App\Weather\WeatherGatewayInterface::class, \App\Weather\FakeWeatherGateway::class);
		} else if(app()->environment() === 'production') {
			app()->bind(\App\Weather\WeatherGatewayInterface::class, \App\Weather\DarkSkyWeatherGateway::class);
		}
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

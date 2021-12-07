<?php

namespace App\Providers;
use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
    public function boot(Charts $charts)
    {
        Schema::defaultStringLength(190);
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        $charts->register([
            \App\Charts\SampleChart::class
        ]);
    }
}

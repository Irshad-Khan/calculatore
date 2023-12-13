<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use irshadkhan\CalculatorPackage\Calculator;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('calculator', function () {
            return new Calculator();
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

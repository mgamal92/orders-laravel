<?php
namespace MG\Order;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            // config file.
            __DIR__.'/config/laravel-orders.php' => config_path('laravel-orders.php'),
        ], 'config');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
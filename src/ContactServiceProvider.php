<?php

namespace arafat\contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
        __DIR__.'/config/Contact.php', 'contact'
        );
        $this->publishes([
        __DIR__.'/config/Contact.php' => config_path('Contact.php'),
    ]);
    }

    public function register()
    {
        // code...
    }
}

<?php

namespace HossamMonir\Unifonic;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class UnifonicServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register a class in the service container
        $this->app->bind('Unifonic', function () {
            return new UnifonicServices();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Unifonic services config to the application config
        $this->publishes([
            __DIR__.'/config/unifonic.php' => config_path('unifonic.php'),
        ]);

        $loader = AliasLoader::getInstance();
        $loader->alias('Unifonic', 'HossamMonir\\Unifonic\\Facades\\Unifonic');
    }
}

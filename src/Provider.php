<?php

namespace AgenterLab\Version;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('version', function ($app) {
            return new Version($app);
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/version.php', 'version');
    }
}

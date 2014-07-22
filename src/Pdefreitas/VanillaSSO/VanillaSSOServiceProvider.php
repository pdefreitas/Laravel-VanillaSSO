<?php
/**
 * This file is part of Laravel-VanillaSSO for jsConnect
 * @author pdefreitas <pdefreitas@users.noreply.github.com>
 * @license GPLv2
 */

namespace Pdefreitas\VanillaSSO;

use Illuminate\Support\ServiceProvider;

class VanillaSSOServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('pdefreitas/vanillasso');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        //Register the Service Provider
        $this->app['vanillasso'] = $this->app->share(function($app)
        {
            return new VanillaSSO;
        });
        //This allows the facade to work without the developer having to add it to the Alias array in app/config/app.php
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('VanillaSSO', 'Pdefreitas\VanillaSSO\VanillaSSOFacade');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('vanillasso');
    }
}
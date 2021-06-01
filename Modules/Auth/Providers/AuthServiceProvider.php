<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/auth');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'auth');
        } else {
            $this->loadTranslationsFrom(module_path('Auth', 'Resources/lang'), 'auth');
        }
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(base_path('config/pages/home.php'), 'pages');

        $this->publishes([
            module_path('Auth', 'Config/config.php') => config_path('auth.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Auth', 'Config/config.php'), 'auth'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/auth');
        $sourcePath = module_path('Auth', 'Resources/views');
        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/auth';
        }, Config::get('view.paths')), [$sourcePath]), 'auth');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../web.php');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}

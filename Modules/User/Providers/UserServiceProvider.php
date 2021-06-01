<?php

namespace Modules\User\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;


class UserServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
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
        $langPath = resource_path('lang/modules/user');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'user');
        } else {
            $this->loadTranslationsFrom(module_path('User', 'Resources/lang'), 'user');
        }
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('User', 'Config/config.php') => config_path('user.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('User', 'Config/config.php'), 'user'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/user');

        $sourcePath = module_path('User', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/user';
        }, Config::get('view.paths')), [$sourcePath]), 'user');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRoute();
    }

    protected function registerRoute()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Route/web.php');
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

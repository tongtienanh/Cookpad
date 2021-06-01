<?php

namespace Modules\Rss\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class RssServiceProvider extends ServiceProvider
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
//        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('Rss', 'Database/Migrations'));
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/rss');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'rss');
        } else {
            $this->loadTranslationsFrom(module_path('Rss', 'Resources/lang'), 'rss');
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
            module_path('Rss', 'Config/config.php') => config_path('rss.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Rss', 'Config/config.php'), 'rss'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/rss');

        $sourcePath = module_path('Rss', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/rss';
        }, Config::get('view.paths')), [$sourcePath]), 'rss');
    }

//    /**
//     * Register an additional directory of factories.
//     *
//     * @return void
//     */
//    public function registerFactories()
//    {
//        if (!app()->environment('production') && $this->app->runningInConsole()) {
//            app(\Illuminate\View\Factory::class)->load(module_path('Rss', 'Database/factories'));
//        }
//    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(dirname(__FILE__) . '/../Routes/web.php');
    }
}

<?php

namespace Workable\Feed;

use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class FeedServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'feed');
        $this->publishes([
            __DIR__ . '/Resources/views' => base_path('resources/views/vendor/feed')
        ], 'views');
        $config_file = __DIR__ . '/Config/config.php';
        $this->mergeConfigFrom($config_file, 'feed');
        $this->publishes([
            $config_file => config_path('feed.php')
        ], 'config');
    }

    public function register()
    {
        $this->app->bind('feed', function (Container $app) {
            $params = [
                'cache' => $app[\Illuminate\Contracts\Cache\Repository::class],
                'config' => $app['config'],
                'files' => $app['files'],
                'response' => $app[ResponseFactory::class],
                'view' => $app['view']
            ];
            return new FeedRss($params);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['feed', FeedRss::class];
    }
}

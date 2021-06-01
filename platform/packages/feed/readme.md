## Installation
Run the following command and provide the latest stable version (e.g v7.0.*) :
```
composer require workable/feed
```

Publish package views (OPTIONAL) :
php artisan vendor:publish --provider="Workable\Feed\FeedServiceProvider"

# Setting
```
    # Add in AppServiceProvider
    use Illuminate\Cache\Repository as CacheImplementation;
    use Illuminate\Contracts\Cache\Repository as CacheContract;
    $this->app->singleton('Illuminate\Contracts\Routing\ResponseFactory', function ($app) {
            return new \Illuminate\Routing\ResponseFactory(
                $app['Illuminate\Contracts\View\Factory'],
                $app['Illuminate\Routing\Redirector']
            );
        });
        $this->app->singleton(CacheImplementation::class, CacheContract::class);
```

# Checklist
- [] Test phpunit
- [] Example view
- [] Data sample

## Reference
https://github.com/Laravelium/laravel-feed

<?php

namespace Workable\Base\Providers;

use Illuminate\Support\ServiceProvider;
use Workable\Base\Supports\Helper;
use Workable\Base\Traits\LoadAndPublishDataTrait;

class BaseServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    protected $app;

    public function register()
    {
        Helper::autoload(dirname(dirname(__FILE__)).'/../helpers');
    }
}

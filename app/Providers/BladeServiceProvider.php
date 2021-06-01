<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('location', function($expression)
        {
            $view = 'component.search.box_address';

            if (!$expression)
            {
                $expression = '([])';
            }

            return "<?php echo \$__env->make('{$view}', Arr::except(get_defined_vars(), ['__data', '__path']))->with{$expression}->render(); ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

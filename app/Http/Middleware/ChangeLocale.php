<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Session;

class ChangeLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = Session::get('website_language') ?? 'vi';
        if ($lang)
        {
            app('translator')->setLocale($lang);
            app('config')->set(['app.locale' => $lang]);
        }
        return $next($request);
    }
}

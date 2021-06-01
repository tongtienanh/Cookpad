<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $this->getLangData();
    }
    public function getLangData()
    {
        //dd(\Session::get('current_lang'));
//        $current_lang = Session::get('current_lang', config('app.locale'));
//        $text_lang = \Arr::get(config('lang'), $current_lang . '.title');
        $data_lang = config('lang.lang');
        view()->share('current_lang', $current_lang ?? '');
        view()->share('text_lang', $text_lang ?? null);
        view()->share('data_lang', $data_lang);
    }

    public function setLang($lang)
    {
//        Session::put('current_lang', $lang);
    }

    public function enable($component)
    {
        return isset($component['status']) && $component['status'] ? 1 : 0;
    }
}

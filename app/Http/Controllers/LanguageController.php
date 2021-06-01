<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request){
        $language = $request->get('locale');
        Session::put('website_language', $language);

        $url = $request->get('url') ?? route('get.home.index');

        return redirect()->back();
    }
}

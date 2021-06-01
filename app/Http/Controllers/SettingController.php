<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting(){
        return view('pages.setting.index');
    }
    public function friend_suggestions(){
        return view('pages.setting.friend_suggestions');
    }
    public function notification(){
        return view('pages.setting.notification_preferences');
    }
    public function protected(){
        return view('pages.setting.protected');
    }
    public function terms(){
        return view('pages.setting.terms');
    }
    public function cookies(){
        return view('pages.setting.cookies');
    }
    public function community(){
        return view('pages.setting.community');
    }
    public function FAQ (){
        return view('pages.setting.FAQ');
    }
    public function license (){
        return view('pages.setting.license');
    }

}

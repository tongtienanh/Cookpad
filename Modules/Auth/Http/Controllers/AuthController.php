<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth::pages.register');
    }

    public function login()
    {
        return view('auth::pages.login');
    }

    public function forgotPass()
    {
        return view('auth::pages.forgot_pass');
    }

    public function complete()
    {
        return view('auth::pages.complete');
    }
}

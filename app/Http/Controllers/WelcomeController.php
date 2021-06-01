<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function popup()
    {
        return view('popup');
    }

    public function emailSuccess()
    {
        return view('pages.email_success.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regionsController extends Controller
{
    public function index(){
        return view('pages.regions.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('pages.review.index');
    }
    public function profile(){
        return view('pages.review_profile.index');
    }
}

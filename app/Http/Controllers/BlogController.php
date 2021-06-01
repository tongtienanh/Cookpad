<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index(){
       return view('pages.blog.index');
   }
    public function job_search(){
        return view('pages.blog_job_search.index');
    }
    public function detail(){
        return view('pages.blog_detail.index');
    }
}

<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog::pages.home.index');
    }
    public function blog()
    {
        return view('blog::pages.blog.index');
    }
    public function detail()
    {
        return view('blog::pages.blog_detail.index');
    }
    public function job_search()
    {
        return view('blog::pages.blog_job_search.index');
    }
}

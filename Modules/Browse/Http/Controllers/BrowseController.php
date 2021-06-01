<?php

namespace Modules\Browse\Http\Controllers;

use Illuminate\Routing\Controller;

class BrowseController extends Controller
{
    public function company()
    {
        return view('browse::pages.company.index');
    }

    public function skill()
    {
        return view('browse::pages.skill.index');
    }

    public function career()
    {
        return view('browse::pages.career.index');
    }

    public function location()
    {
        return view('browse::pages.location.index');
    }

    public function university()
    {
        return view('browse::pages.university.index');
    }
}

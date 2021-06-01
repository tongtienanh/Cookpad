<?php

namespace Modules\Browse\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class BrowseIndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('browse::index');
    }

}

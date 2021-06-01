<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        return view('pages.table.index');
    }
    public function booking(){
        return view('pages.table_booking.index');
    }
}

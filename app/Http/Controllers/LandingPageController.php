<?php
/**
 * Created by PhpStorm.
 * User: TranLuong
 * Date: 13/09/2020
 * Time: 15:14
 */

namespace App\Http\Controllers;


class LandingPageController extends Controller
{
    public function about()
    {
        return view('pages.about.index');
    }

    public function action()
    {
        return view('pages.action.index');
    }
}

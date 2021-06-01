<?php
/**
 * Created by PhpStorm.
 * User: TranLuong
 * Date: 15/12/2020
 * Time: 23:41
 */

namespace App\Http\Controllers\CV;


use App\Http\Controllers\Controller;

class TemplateCVController extends Controller
{
    public function index()
    {
        return view('pages.cv_template.index');
    }

    public function show()
    {
        return view('pages.cv_template_detail.index');
    }
}

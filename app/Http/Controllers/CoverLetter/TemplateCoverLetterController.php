<?php
/**
 * Created by PhpStorm.
 * User: TranLuong
 * Date: 24/12/2020
 * Time: 08:47
 */

namespace App\Http\Controllers\CoverLetter;


use App\Http\Controllers\Controller;

class TemplateCoverLetterController extends Controller
{
    public function index()
    {
        return view('pages.cover_letter_template.index');
    }

    public function show()
    {
        return view('pages.cover_letter_template_detail.index');
    }
}

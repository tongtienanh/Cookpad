<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2020/08/15 - 17:00
 */

namespace Workable\FileUploader\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Workable\FileUploader\Services\ImageServiceUpload;

class ImageUploadApiController extends Controller
{
    public function uploadFromLink(Request $request)
    {
        $link = $request->get('link');
        $result = ImageServiceUpload::uploadFromLink($link, 'logo');
        return response()->json($result ? $result->toArray() : []);
    }
}
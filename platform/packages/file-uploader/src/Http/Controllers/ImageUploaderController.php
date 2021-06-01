<?php
namespace Workable\FileUploader\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Workable\FileUploader\Services\ImageServiceUpload;

class ImageUploaderController extends Controller
{
    public function getUploadImage()
    {
        return view('packages.file-uploader::upload_image')->with([]);
    }

    public function postUploadImage()
    {

        $result = ImageServiceUpload::upload('file', 'logo', 'crop');
        echo_array($result);
    }

    public function postUploadImageMulti(Request $request)
    {
        $result = ImageServiceUpload::uploadMulti('file', 'logo');
        echo_array($result);
    }

    public function postUploadBase64(Request $request)
    {
        $base64 = $request->base64;
        $results = ImageServiceUpload::uploadFromBase64($base64, 'logo', 'resize');
        echo_array($results);
    }

    public function postUploadLink(Request $request)
    {
        $link = $request->link;
        $results = ImageServiceUpload::uploadFromLink($link, 'logo', 'resize');
        echo_array($results);
    }
}

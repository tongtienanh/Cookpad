<?php
namespace Workable\FileUploader\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Workable\FileUploader\Services\FileServiceUpload;
use Workable\FileUploader\Supports\FileUploaderConfigSupport;

class FileUploaderController extends Controller
{
    public function index()
    {
        $config = FileUploaderConfigSupport::get();

        $viewData = [
            'config' => $config
        ];
        return view('packages.file-uploader::welcome')->with($viewData);
    }

    public function getUpload()
    {
        return view('packages.file-uploader::upload_file')->with([]);
    }

    public function postUpload(Request $request)
    {
        $result = FileServiceUpload::upload('file');
        echo_array($result);
    }

    public function postUploadMulti(Request $request)
    {
        $result = FileServiceUpload::uploadMulti('file');
        echo_array($result);
    }
}

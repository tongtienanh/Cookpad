<?php

namespace Workable\FileUploader\Facades;

use Illuminate\Support\Facades\Facade;

class FileUploader extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "file-uploader";
    }
}

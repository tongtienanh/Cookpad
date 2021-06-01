<?php

namespace Workable\FileUploader\Core\Images;

use \Intervention\Image\ImageManagerStatic as BaseImage;
use Input;

class Image
{
    public function getImage($resource = '')
    {
        $image = BaseImage::make($resource);
        $mime = $image->mime();

        switch ($mime)
        {
            case 'image/gif':
                return $image->encode('gif');

            case 'image/jpeg':
            case 'image/jpg':
                return $image->encode('jpg', 100);

            case 'image/png':
                return $image->encode('png', 8);

            case 'image/bmp':
                return $image->encode('bmp');
        }

        return $image;
    }

    /**
     * Crop image
     *
     * @param  string $fullPathFile
     * @param  string $pathUpload
     * @param  array  $arrayCrop
     *
     * @return array thumbs
     */
    public function crop($fullPathFile= '', $pathUpload = '', $arrayCrop=[])
    {
        $image    = $this->getImage($fullPathFile);
        $fileName = explode(DIRECTORY_SEPARATOR, $fullPathFile);
        $fileName = end($fileName);
        $result   = [];

        foreach ($arrayCrop as $imgType => $imgInfo)
        {
            $optionFileName = $pathUpload . $imgType . $fileName;

            $image->backup()
                  ->fit($imgInfo['width'], $imgInfo['height'])
                  ->save($optionFileName)
                  ->reset();

            $result[$imgType] = $imgType . $fileName;
        }
        $image->destroy();

        return $result;
    }


    public function getMime($image)
    {
        return $image->mime();
    }

    /**
     * Insert watermark
     * @param string $fullPathFile
     * User: Hungokata
     * Date: 2020/08/16 - 23:20
     */
    public function insertWaterMark($fullPathFile = '')
    {
//        $image = $this->getImage($fullPathFile);
//        $image->backup();
//
//        $image->insert(public_path('water_mark.jpg'))
//              ->save($fullPathFile);
//
//        $image->reset();
    }
}
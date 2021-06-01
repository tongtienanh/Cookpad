<?php
namespace Workable\FileUploader\Core\Images;

class ImageOptimizeDefault extends Image
{
    protected $drive;

    public function __construct($drive = '')
    {
        $this->drive = $drive ?? '';
    }

    /**
     * Resize ảnh vì ảnh lớn
     * @param $fullPathFile
     * @param $pathUpload
     */
    public function resizeOne($fullPathFile, $pathUpload, $param = [])
    {
        $width          = $param['width'] ?? 300;
        $image          = $this->getImage($fullPathFile);

        $image->backup();
        $image->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($fullPathFile);

        $image->reset();
    }

    /**
     * Resize ảnh theo cấu hình thumb
     * @param       $fullPathFile
     * @param       $pathUpload
     * @param array $arrayResize
     * @return array
     */
    public function resize($fullPathFile, $pathUpload, $arrayResize = array())
    {
        // Create new instance of Image
        $result = [];
        $image    = $this->getImage($fullPathFile);
        $fileName = explode(DIRECTORY_SEPARATOR, $fullPathFile);
        $fileName = end($fileName);

        foreach ($arrayResize as $imgType => $imgInfo)
        {
            $optionFileName = $pathUpload . $imgType . $fileName;
            $image->backup();

            // Resize with auto height
            $image->resize($imgInfo['width'], null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($optionFileName)->reset();

            $result[$imgType] = $imgType . $fileName;
        }
        return $result;
    }
}
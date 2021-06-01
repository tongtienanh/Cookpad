<?php
namespace Workable\FileUploader\Core\Images;

class ImageOptimizeMinio extends Image
{
    protected $drive;

    public function __construct($drive = '')
    {
        $this->drive = $drive ?? 'minio';
    }

    /**
     * Resize with a image
     * @param       $fullPathFile
     * @param       $pathUpload
     * @param array $param
     * User: Hungokata
     * Date: 8/14/19
     */
    public function resizeOne($fullPathFile, $pathUpload, $param = [])
    {
        $width          = $param['width'] ?? 300;
        $domain         = rtrim(static_url(),DIRECTORY_SEPARATOR);
        $optionFileName = str_replace($domain,'', $fullPathFile);
        $image          = $this->getImage($fullPathFile);

        $image->backup();
        $image->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $resource = $image->stream()->detach();
        \Storage::disk($this->drive)->put(
            $optionFileName,
            $resource
        );
        $image->reset();
    }

    /**
     * Resize with arraySize
     * @param       $fullPathFile
     * @param       $pathUpload
     * @param array $arrayResize
     * @return array
     * User: Hungokata
     * Date: 8/15/19
     */
	public function resize($fullPathFile, $pathUpload, $arrayResize = array())
	{
		$image    = $this->getImage($fullPathFile);
		$fileName = explode(DIRECTORY_SEPARATOR, $fullPathFile);
		$fileName = end($fileName);
		$result   = [];
		$domain   = rtrim(static_url(),DIRECTORY_SEPARATOR);

		foreach ($arrayResize as $imgType => $imgInfo)
		{
			$optionFileName = $pathUpload . $imgType . $fileName;
			$optionFileName =  str_replace($domain,'', $optionFileName);

			$image->backup();
			$image->resize($imgInfo['width'], null, function ($constraint) {
				$constraint->aspectRatio();
			});

			$resource = $image->stream()->detach();

			\Storage::disk($this->drive)->put(
				$optionFileName,
				$resource
			);
			$image->reset();
			$result[$imgType] = $imgType . $fileName;
		}

		return $result;
	}

    /**
     * Crop image
     * @param string $fullPathFile
     * @param string $pathUpload
     * @param array  $arrayCrop
     * @return array
     * User: Hungokata
     * Date: 2020/08/18 - 14:10
     */
	public function crop($fullPathFile = '', $pathUpload = '', $arrayCrop = [])
    {
        $result   = [];
        $image    = $this->getImage($fullPathFile);
        $fileName = explode(DIRECTORY_SEPARATOR, $fullPathFile);
        $fileName = end($fileName);
        $domain   = rtrim(static_url(),DIRECTORY_SEPARATOR);

        foreach ($arrayCrop as $imgType => $imgInfo)
        {
            $optionFileName = $pathUpload . $imgType . $fileName;
            $optionFileName =  str_replace($domain,'', $optionFileName);
            $image->backup()
                  ->fit($imgInfo['width'], $imgInfo['height']);

            $resource = $image->stream()->detach();
            \Storage::disk($this->drive)->put(
                $optionFileName,
                $resource
            );
            $image->reset();
            $result[$imgType] = $imgType . $fileName;
        }
        return $result;
    }

}
<?php
namespace Workable\FileUploader\Core\Driver;

use Workable\FileUploader\Core\DataUpload;
use Workable\FileUploader\Core\Contracts\UploadDriverInterface;
use Workable\FileUploader\Core\Exceptions\UploadFileException;
use Workable\FileUploader\Core\ResponseUpload;

class UploadMino implements UploadDriverInterface
{
    /**
     * Upload file
     * @param DataUpload $dataUpload
     * @param array      $params
     * @return ResponseUpload
     */
	public function upload(DataUpload $dataUpload, $params = [])
	{
        $newFile             = $dataUpload->getNewFile();
        $pathUpload          = $dataUpload->getUploadFolderToday();
        $fullPath            = $dataUpload->getFullPathNewFile($pathUpload);
        $driverConfig        = $dataUpload->getDriverConfig();

		try
        {
            $fileContent      = $dataUpload->getContentTmpNameFile();
            $driverName       = $driverConfig['name'];
			\Storage::disk($driverName)->put($fullPath, $fileContent);
			$size = \Storage::disk($driverName)->size($fullPath, $fileContent);

			return (new ResponseUpload($newFile, static_url($pathUpload), $size, 'minio'));
		}
		catch (UploadFileException $e)
        {
            \Log::error('-- Error upload: '.$e->info());
		}
		return new ResponseUpload();
	}
}
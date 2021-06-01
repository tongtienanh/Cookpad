<?php
namespace Workable\FileUploader\Core\Driver;

use Illuminate\Support\Facades\Log;

use Workable\FileUploader\Core\Contracts\UploadDriverInterface;
use Workable\FileUploader\Core\Exceptions\UploadFileException;
use Workable\FileUploader\Core\ResponseUpload;
use Workable\FileUploader\Core\DataUpload;

class UploadDefault implements UploadDriverInterface
{
    /**
     * Upload file
     * @param DataUpload $dataUpload
     * @param array      $params
     * @return ResponseUpload
     * @throws \Workable\FileUploader\Core\Exceptions\UploadFolderDoesNotExistException
     */
	public function upload(DataUpload $dataUpload, $params = [])
	{
        $tmpName             = $dataUpload->getTmpName();
        $newFile             = $dataUpload->getNewFile();
        $typeUpload          = $dataUpload->getTypeUpload();
        $pathUpload          = $dataUpload->getUploadFolderToday();
        $fullPath            = $dataUpload->getFullPathNewFile($pathUpload);
		try
        {
            $typeUpload ? file_put_contents($fullPath, $dataUpload->getContentTmpNameFile())
                        : move_uploaded_file($tmpName, $fullPath);

            return (new ResponseUpload($newFile, $pathUpload, filesize($fullPath), 'local'));
		}
		catch (UploadFileException $e)
        {
			Log::error('-- Error upload: '. $e->info());
		}

		return new ResponseUpload();
	}
}
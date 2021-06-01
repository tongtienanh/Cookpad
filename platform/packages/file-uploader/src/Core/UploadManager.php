<?php

namespace Workable\FileUploader\Core;

use Workable\FileUploader\Core\Contracts\UploadDriverInterface;

class UploadManager
{
    /**
     * @var UploadDriverInterface
     */
	protected $uploadDriver;

    /**
     * UploadManager constructor.
     * @param $uploadDriver
     */
	public function __construct($uploadDriver)
	{
        $this->uploadDriver = new $uploadDriver;


	}

    /**
     * B
     * @param DataUpload $dataUpload
     * @param array      $params
     * @return mixed
     * User: Hungokata
     * Date: 8/14/19
     */
	public function upload(DataUpload $dataUpload, $params = [])
	{
        return $this->uploadDriver->upload($dataUpload, $params);
	}
}
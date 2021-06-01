<?php
namespace Workable\FileUploader\Core\Contracts;
use Workable\FileUploader\Core\DataUpload;

interface UploadDriverInterface
{
    /**
     * B
     * @param DataUpload $dataUpload
     * @param array      $params
     * @return mixed
     * User: Hungokata
     * Date: 8/14/19
     */
	public function upload(DataUpload $dataUpload, $params = []);
}
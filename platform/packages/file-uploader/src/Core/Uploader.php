<?php namespace Workable\FileUploader\Core;

use Workable\FileUploader\Supports\UploadConfig;

class Uploader
{
    /**
     * Driver upload default
     * @var
     */
	protected $drive;

    /**
     * ProcessOptimize for type upload image
     * @var
     */
	protected $processOptimize;

    /**
     * @var Upload
     */
	protected $upload;

	public function __construct(Upload $upload)
	{
        $this->drive     = UploadConfig::get('upload.default');
	    $this->upload    = $upload;
	    $this->settingUpload();
	}

    /**
     * Thiết lập upload
     * User: Hungokata
     * Date: 2020/08/15 - 14:33
     */
	protected function settingUpload()
    {

        $driverConfig    = UploadConfig::getDriverConfig($this->drive);
        $processUpload   = UploadConfig::getProcessUpload();
        $processOptimize = UploadConfig::getProcessOptImage();

        $this->processOptimize = $processOptimize;
        $this->upload->setDriveConfig($driverConfig)
                     ->setProcessUpload($processUpload);
    }

    /**
     * Set config upload
     * @param array $config
     * @return $this
     * User: Hungokata
     * Date: 8/14/19
     */
	public function setConfigUpload($config = [])
	{
	    $this->upload->setExtension($config['extensions'])
                     ->setFileSize($config['file_size'])
                     ->setUploadFolder($config['upload_folder']);
		return $this;
	}

    /**
     * Make instance process Optimize
     * @return mixed
     * User: Hungokata
     * Date: 8/14/19
     * @throws \Exception
     */
	public function instanceProcessOptimize()
    {
        return new $this->processOptimize($this->drive);
    }

    /**
     * Upload file
     * @param $fileControl
     * @return mixed
     * User: Hungokata
     * Date: 8/14/19
     * @throws \Workable\FileUploader\Core\Exceptions\FileTypeIsNotAllowedException
     * @throws \Workable\FileUploader\Core\Exceptions\NoFileSelectedException
     * @throws \Workable\FileUploader\Core\Exceptions\UploadException
     * @throws \Workable\FileUploader\Core\Exceptions\UploadMaxFileSizeException
     */
	public function upload($fileControl)
	{
		return $this->upload->upload($fileControl);
	}

    /**
     * Upload multiple
     * @param $fileControl
     * @return array
     * User: Hungokata
     * Date: 8/14/19
     * @throws \Workable\FileUploader\Core\Exceptions\FileTypeIsNotAllowedException
     * @throws \Workable\FileUploader\Core\Exceptions\NoFileSelectedException
     * @throws \Workable\FileUploader\Core\Exceptions\UploadException
     * @throws \Workable\FileUploader\Core\Exceptions\UploadMaxFileSizeException
     */
    public function uploadMulti($fileControl)
    {
        return $this->upload->uploadMulti($fileControl);
    }

    /**
     * Upload base 64
     * @param $fileBase64
     * @return mixed
     * User: Hungokata
     * Date: 8/14/19
     * @throws \Workable\FileUploader\Core\Exceptions\FileTypeIsNotAllowedException
     * @throws \Workable\FileUploader\Core\Exceptions\UploadMaxFileSizeException
     */
	public function uploadImageBase64($fileBase64)
	{
		return $this->upload->uploadImageBase64($fileBase64);
	}

    /**
     * Upload from link
     * @param $link
     * @param $params
     * @return mixed
     * User: Hungokata
     * Date: 8/14/19
     * @throws \Workable\FileUploader\Core\Exceptions\FileTypeIsNotAllowedException
     * @throws \Workable\FileUploader\Core\Exceptions\UploadMaxFileSizeException
     * @throws \Workable\FileUploader\Core\Exceptions\UploadPathDoesNotExistException
     */
	public function uploadFromLink($link, $params)
    {
        return $this->upload->uploadFromLink($link, $params);
    }
}
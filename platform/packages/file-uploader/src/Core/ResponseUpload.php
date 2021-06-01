<?php
/**
 * Class response upload from driver
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 8/15/20 - 07:25
 */
namespace Workable\FileUploader\Core;


class ResponseUpload
{
    /**
     * Kết quả trả về upload
     * @var string
     */
    protected $files       = '';

    /**
     * Đường dẫn upload
     * @var string
     */
    protected $path_upload = '';

    /**
     * Kích thước upload
     * @var string
     */
    protected $size        = '';

    protected $driver      = '';

    public function __construct($files = '', $path_upload = '', $size = '', $driver='')
    {
        $this->files       = $files;
        $this->path_upload = $path_upload;
        $this->size        = $size;
        $this->driver      = $driver;
    }

    /**
     * Files
     * @return string
     * User: Hungokata
     * Date: 8/15/19
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Path folder
     * @return string
     * User: Hungokata
     * Date: 8/15/19
     */
    public function getPathUpload()
    {
        return $this->path_upload;
    }

    /**
     * Size folder
     * @return string
     * User: Hungokata
     * Date: 8/15/19
     */
    public function getSizeUpload()
    {
        return $this->size;
    }

    public function getDriver()
    {
        return $this->driver;
    }
}
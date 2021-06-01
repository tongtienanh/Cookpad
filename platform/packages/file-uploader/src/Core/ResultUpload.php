<?php
/**
 * File trả về kết quả upload
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2020/08/15 - 09:02
 */
namespace Workable\FileUploader\Core;

class ResultUpload
{
    protected $thumbs   = [];
    protected $fileName = null;
    protected $size     = null;
    protected $width    = 0;
    protected $height   = 0;
    protected $link     = null;
    protected $driver   = 'local';

    public function setThumbs($item =[])
    {
        $this->thumbs = $item;
        return $this;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    public function setDriver($driver)
    {
        $this->driver = $driver;
        return $this;
    }

    public function toArray()
    {
        return [
            'file_name' => $this->fileName,
            'thumbs'    => $this->thumbs,
            'size'      => $this->size,
            'width'     => $this->width,
            'height'    => $this->height,
            'driver'    => $this->driver,
            'link'      => $this->link
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2020/08/15 - 14:50
 */
namespace Workable\FileUploader\Services;

use Workable\Base\Supports\CliEcho;
use Workable\FileUploader\Core\Exceptions\UploadFileException;
use Workable\FileUploader\Supports\FileUploaderConfigSupport;

class ImageServiceUpload
{
    protected static $abstract = 'ImageUploader';

    protected static function instanceFactory($config)
    {
        return app(self::$abstract)->setConfig($config);
    }

    /**
     * Upload from form data
     * @param string $type
     * @param string      $fileControl
     * @param string      $type
     * @param string      $optional: watermark, crop, resize ...
     * @return mix|null
     * User: Hungokata
     * Date: 2020/08/16 - 15:42
     */
    public static function upload($fileControl, $type = 'logo', $optional = '')
    {
        try
        {
            $config  = FileUploaderConfigSupport::get('upload_image.'.$type);
            $thumbs  = $config['thumbs'];
            $results = static::instanceFactory($config)->upload($fileControl, $thumbs, $optional);
        }
        catch (UploadFileException $e)
        {
            self::logging($e);
            $results = null;
        }
        return $results;
    }

    /**
     * Upload multi from form data
     * @param $fileControl
     * @param $type
     * @return mix|null
     * User: Hungokata
     * Date: 2020/08/16 - 17:45
     */
    public static function uploadMulti($fileControl, $type='logo')
    {
        try
        {
            $config = FileUploaderConfigSupport::get('upload_image.'.$type);
            $results = static::instanceFactory($config)->uploadMulti($fileControl);
        }
        catch (UploadFileException $e)
        {
            self::logging($e);
            $results = null;
        }
        return $results;
    }

    /**
     * Upload from link like: https, http
     * @param string      $link
     * @param string      $type
     * @param string $optional: watermark, crop, resize ...
     * @return mix|null
     * User: Hungokata
     * Date: 2020/08/16 - 15:49
     */
    public static function uploadFromLink($link, $type, $optional = '')
    {
        try
        {
            $config  = FileUploaderConfigSupport::get('upload_image.'.$type);
            $thumbs  = $config['thumbs'];
            $results = static::instanceFactory($config)->uploadFromLink($link, $thumbs, $optional);
        }
        catch (UploadFileException $e)
        {
            self::logging($e);
            $results = null;
        }

        return $results;
    }

    /**
     * Upload from base64 data: https://imagetobase64.io/
     * @param  string  $link
     * @param  string  $type: key cấu hình trong file upload_image.
     * @param  string  $optional: watermark, crop, resize ...
     * @return mix|null
     * User: Hungokata
     * Date: 2020/08/16 - 15:49
     */
    public static function uploadFromBase64($fileBase64, $type, $optional = '')
    {
        try
        {
            $config  = FileUploaderConfigSupport::get('upload_image.'.$type);
            $thumbs  = $config['thumbs'];
            $results = static::instanceFactory($config)->uploadBase64($fileBase64, $thumbs, $optional);
        }
        catch (UploadFileException $e)
        {
            self::logging($e);
            $results = null;
        }
        return $results;
    }

    protected static function logging(UploadFileException $e)
    {
        CliEcho::errornl($e->info());
    }
}
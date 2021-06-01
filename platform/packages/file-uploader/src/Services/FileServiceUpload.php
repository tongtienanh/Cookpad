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

class FileServiceUpload
{
    protected static $abstract = 'Uploader';

    protected static function instanceFactory($config)
    {
        return app(self::$abstract)->setConfigUpload($config);
    }

    /**
     * Upload from form data
     * @param        $fileControl
     * @param string $key
     * @return null
     * User: Hungokata
     * Date: 2020/08/17 - 00:20
     */
    public static function upload($fileControl, $key='pdf_and_doc')
    {
        try
        {
            $config  = FileUploaderConfigSupport::get('upload_file.'.$key);
            $results = self::instanceFactory($config)->upload($fileControl);
        }
        catch (UploadFileException $e)
        {
            self::logging($e);
            $results = null;
        }

        return $results;
    }

    /**
     * Upload from form data multi
     * @param        $fileControl
     * @param string $key
     * @return null
     * User: Hungokata
     * Date: 2020/08/17 - 00:20
     */
    public static function uploadMulti($fileControl, $key = 'pdf_and_doc')
    {
        try
        {
            $config  = FileUploaderConfigSupport::get('upload_file.'.$key);
            $results = self::instanceFactory($config)->uploadMulti($fileControl);
        }
        catch (UploadFileException $e)
        {
            self::logging($e);
            $results = null;
        }

        return $results;
    }

    /**
     * Logging
     * @param UploadFileException $e
     * User: Hungokata
     * Date: 2020/08/17 - 00:20
     */
    protected static function logging(UploadFileException $e)
    {
        CliEcho::errornl($e->info());
    }
}
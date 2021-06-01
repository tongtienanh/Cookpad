<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2020/08/15 - 09:23
 */

namespace Workable\FileUploader\Supports;


class UploadConfig extends FileUploaderConfigSupport
{
    const PROCESS_UPLOAD   = 'process_upload';
    const PROCESS_OPTIMIZE = 'process_optimize';

    protected static $driverConfig = null;

    public static function getDriverName()
    {
        return static::get('upload.default');
    }

    public static function getDriverConfig($driveName)
    {
        $driveName = 'upload.driver.'.$driveName;

        if (!self::$driverConfig)
        {
            self::$driverConfig = static::get($driveName);
        }
        return self::$driverConfig;
    }

    public static function getProcessOptImage($keyOpt = self::PROCESS_OPTIMIZE)
    {
        return self::$driverConfig[$keyOpt];
    }

    public static function getProcessUpload($keyUpload = self::PROCESS_UPLOAD)
    {
        return self::$driverConfig[$keyUpload];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 5/13/19
 * Time: 15:16
 */
namespace Workable\FileUploader\Core;

use Workable\FileUploader\Core\Exceptions\UploadFolderDoesNotExistException;
use Workable\FileUploader\Core\Utils\FileContent;
use Workable\FileUploader\Supports\Filesystem;

class DataUpload
{
    /**
     * @var mixed|null
     */
    protected $upload_folder = null;

    /**
     * @var mixed|null
     */
    protected $tmp_name      = null;

    /**
     * @var mixed|null
     */
    protected $new_file      = null;

    /**
     * @var array|mixed
     */
    protected $driver_config = [];

    /**
     * @var mixed|null
     */
    protected $type_upload   = null;

    /**
     * @var mixed|null
     */
    protected $content       = null;

    /**
     * @var null|Filesystem
     */
    protected $fileSystem    = null;

    public function __construct($params=[])
    {
        $this->content       = $params['content'] ?? null;
        $this->upload_folder = $params['upload_folder'];
        $this->tmp_name      = $params['tmp_name'];
        $this->new_file      = $params['new_file'];
        $this->driver_config = $params['drive'];
        $this->type_upload   = $params['type'] ?? null;
        $this->fileSystem    = new Filesystem();
    }

    /**
     * Get temp name
     * @return mixed|null
     * User: Hungokata
     * Date: 8/14/19
     */
    public function getTmpName()
    {
        return $this->tmp_name;
    }

    /**
     * Get new file
     * @return mixed|null
     * User: Hungokata
     * Date: 8/14/19
     */
    public function getNewFile()
    {
        return $this->new_file;
    }

    /**
     * Get driver config
     * @return array|mixed
     * User: Hungokata
     * Date: 8/14/19
     */
    public function getDriverConfig()
    {
        return $this->driver_config;
    }

    /**
     * Get type upload
     * @return mixed|null
     * User: Hungokata
     * Date: 8/14/19
     */
    public function getTypeUpload()
    {
        return $this->type_upload;
    }

    /**
     * Get content TempFile
     * @return bool|mixed|null|string
     * User: Hungokata
     * Date: 8/14/19
     */
    public function getContentTmpNameFile()
    {
        if ($this->content) return $this->content;

        $content = null;
        switch ($this->type_upload)
        {
            case Upload::FROM_BASE64:
                $content = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->tmp_name));
                break;

            default;
                $content = FileContent::getContent($this->tmp_name);
                break;
        }

        return $content;
    }

    /**
     * Get upload path folder
     * @return string
     * User: Hungokata
     * Date: 8/14/19
     */
    private function getUploadPathFolder()
    {
        return $this->driver_config['path'] . '/' . $this->upload_folder;
    }

    /**
     * Create folder
     * @param $pathUpload
     * User: Hungokata
     * Date: 8/14/19
     * @throws UploadFolderDoesNotExistException
     */
    private function checkUploadPathFolder($pathUpload)
    {
        if ($this->driver_config['name'] == 'local' &&  !file_exists($pathUpload))
        {
            try
            {
                $this->fileSystem->makeDir($pathUpload);
            }
            catch (\Exception $e)
            {
                throw new UploadFolderDoesNotExistException($e->getMessage(), 1);
            }
        }
    }

    /**
     * Get upload folder today
     * @return string
     * User: Hungokata
     * Date: 8/14/19
     * @throws UploadFolderDoesNotExistException
     */
    public function getUploadFolderToday()
    {
        $pathUpload  = $this->getUploadPathFolder();
        $pathUpload .= '/' . date('Y') . '/' . date('m') . '/' . date('d') . '/';
        $this->checkUploadPathFolder($pathUpload);

        return $pathUpload;
    }

    /**
     * Get pull
     * @param $pathUpload
     * @return string
     * User: Hungokata
     * Date: 8/14/19
     */
    public function getFullPathNewFile($pathUpload='')
    {
        return rtrim($pathUpload) .'/'. $this->new_file;
    }
}
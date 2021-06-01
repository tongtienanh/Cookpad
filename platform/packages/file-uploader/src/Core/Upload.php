<?php namespace Workable\FileUploader\Core;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Workable\FileUploader\Core\Exceptions\FileTypeIsNotAllowedException;
use Workable\FileUploader\Core\Exceptions\NoFileSelectedException;
use Workable\FileUploader\Core\Exceptions\UploadException;
use Workable\FileUploader\Core\Exceptions\UploadMaxFileSizeException;
use Workable\FileUploader\Core\Exceptions\UploadPathDoesNotExistException;
use Workable\FileUploader\Core\Utils\FileContent;
use Workable\FileUploader\Supports\UploadConfig;

class Upload
{
    /**
     * @var mixed|string
     */
    public $uploadFolder = 'uploads';

    /**
     * @var []
     */
    public $driveConfig  = [];

    /**
     * @var mixed|null
     */
    protected $extensions = null;

    /**
     * @var mixed|null
     */
    protected $fileSize = null;

    /**
     * @var
     */
    protected $uploadManager;

    const FROM_BASE64   = 'base64';
    const FROM_LINK     = 'link';

    /**
     * Upload constructor.
     * @param array $config
     */
    public function __construct($config = [])
    {
        if (empty($config))
        {
            $config = (array)UploadConfig::get('upload');
        }
        $this->extensions   = Arr::get($config, 'extensions');
        $this->fileSize     = Arr::get($config, 'file_size');
        $this->uploadFolder = Arr::get($config, 'upload_folder', 'uploads');
    }

    /**
     * @param $drive
     * User: Hungokata
     * Date: 8/14/19
     */
    public function setDriveConfig($driveConfig = [])
    {
        $this->driveConfig   = $driveConfig;
        return $this;
    }

    public function setProcessUpload($uploadDriver)
    {
        $this->uploadManager = new UploadManager($uploadDriver);
        return $this;
    }

    /**
     * B
     * @param array $extensions
     * User: Hungokata
     * Date: 8/14/19
     */
    public function setExtension($extensions = [])
    {
        $this->extensions = $extensions;
        return $this;
    }

    /**
     * B
     * @param int $fileSize
     * User: Hungokata
     * Date: 8/14/19
     */
    public function setFileSize($fileSize = 2560)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * B
     * @param string $folder
     * User: Hungokata
     * Date: 8/14/19
     */
    public function setUploadFolder($folder = 'upload_cvs')
    {
        $this->uploadFolder = $folder;
        return $this;
    }

    /**
     * B
     * @param $file_post
     * @return array
     * User: Hungokata
     * Date: 8/14/19
     */
    private function createArrayFiles(&$file_post)
    {

        $file_ary   = [];
        $file_count = count($file_post['name']);
        $file_keys  = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++)
        {
            foreach ($file_keys as $key)
            {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
            if(!$file_ary[$i]['name']) unset($file_ary[$i]);
        }

        return $file_ary;
    }

    /**
     * Upload file control
     * @param $fileControl
     * @return mixed
     * @throws FileTypeIsNotAllowedException
     * @throws NoFileSelectedException
     * @throws UploadException
     * @throws UploadMaxFileSizeException
     */
    public function upload($fileControl)
    {
        if (!isset($_FILES[$fileControl]))
        {
            throw new NoFileSelectedException("Chưa chọn file upload");
        }

        $uploadErrorCode = $_FILES[$fileControl]['error'];

        if ($uploadErrorCode > 0)
        {
            throw new UploadException($uploadErrorCode);
        }

        if ($this->checkExtension($_FILES[$fileControl]['name']) == false)
        {
            throw new FileTypeIsNotAllowedException($this->getExtensions());
        }

        if ($this->checkFileSizeLimit($_FILES[$fileControl]['tmp_name']) == false)
        {
            throw new UploadMaxFileSizeException($this->getFileSizeLimit());
        }

        $newFileName = $this->generateNewFileName($_FILES[$fileControl]['name']);
        $params      = [
            'tmp_name'      => $_FILES[$fileControl]['tmp_name'],
            'new_file'      => $newFileName,
            'upload_folder' => $this->uploadFolder,
            'drive'         => $this->driveConfig
        ];
        $dataUpload = new DataUpload($params);
        return $this->uploadManager->upload($dataUpload);
    }

    /**
     * Upload multi
     * @param $fileControl
     * @return array
     * @throws FileTypeIsNotAllowedException
     * @throws NoFileSelectedException
     * @throws UploadException
     * @throws UploadMaxFileSizeException
     */
    public function uploadMulti($fileControl)
    {
        if (!isset($_FILES[$fileControl]))
        {
            throw new NoFileSelectedException("Chưa chọn file upload");
        }

        $result = [];
        $files  = $this->createArrayFiles($_FILES[$fileControl]);
        foreach ($files as $file)
        {
            //Upload code
            $uploadErrorCode = $file['error'];

            if ($uploadErrorCode > 0)
            {
                throw new UploadException($uploadErrorCode);
            }

            if ($this->checkExtension($file['name']) == false)
            {
                throw new FileTypeIsNotAllowedException($this->getExtensions());
            }

            if ($this->checkFileSizeLimit($file['tmp_name']) == false)
            {
                throw new UploadMaxFileSizeException($this->getFileSizeLimit());
            }

            $newFileName = $this->generateNewFileName($file['name']);
            $params      = [
                'tmp_name'      => $file['tmp_name'],
                'new_file'      => $newFileName,
                'upload_folder' => $this->uploadFolder,
                'drive'         => $this->driveConfig
            ];
            $dataUpload  = new DataUpload($params);
            $result[]    = $this->uploadManager->upload($dataUpload);
        }

        return $result;
    }

    /**
     * Upload image base64
     * @param $fileBase64
     * @return mixed
     * @throws FileTypeIsNotAllowedException
     * @throws UploadMaxFileSizeException
     */
    public function uploadImageBase64($fileBase64)
    {
        $patternExt = "/^data:image\/(?<extension>(?:png|jpg|jpeg));base64,(?<image>.+)$/";
        if (!preg_match($patternExt, $fileBase64, $matching))
        {
            throw new FileTypeIsNotAllowedException($this->getExtensions());
        }

        $size = (int)(strlen(rtrim($fileBase64, '=')) * 3 / 4) / 1024;
        if ($size >= $this->fileSize)
        {
            throw new UploadMaxFileSizeException($this->fileSize);
        }

        $params = [
            'tmp_name'      => $fileBase64,
            'new_file'      => $this->generateNewFileName(time() . '.png'),
            'upload_folder' => $this->uploadFolder,
            'drive'         => $this->driveConfig,
            'type'          => self::FROM_BASE64,
        ];
        $dataUpload  = new DataUpload($params);
        return $this->uploadManager->upload($dataUpload);
    }

    /**
     * Upload from link
     * @param       $link
     * @param array $param
     * @return mixed
     * @throws FileTypeIsNotAllowedException
     * @throws UploadMaxFileSizeException
     * @throws UploadPathDoesNotExistException
     */
    public function uploadFromLink($link, $param = [])
    {
        $fileName = $this->generateNewFileName($param['original']);
        if (!Str::contains($link, ['http://', 'https://']))
        {
            throw new UploadPathDoesNotExistException("Đường dẫn không đúng định dạng (http:// hoặc https://).");
        }

        if (!$this->checkExtension($fileName))
        {
            throw new FileTypeIsNotAllowedException($this->getExtensions());
        }

        $content    = FileContent::getContent($link);
        $fileSize   = strlen($content);
        $fileSizeKb = $fileSize / 1024;
        if ($fileSizeKb > $this->fileSize)
        {
            throw new UploadMaxFileSizeException($this->getFileSizeLimit());
        }

        $params = [
            'content'       => $content,
            'tmp_name'      => $link,
            'new_file'      => $fileName,
            'upload_folder' => $this->uploadFolder,
            'drive'         => $this->driveConfig,
            'type'          => self::FROM_LINK,
        ];
        $dataUpload  = new DataUpload($params);

        return $this->uploadManager->upload($dataUpload);
    }

    /**
     * Generate new file name
     *
     * @param string $filename
     *
     * @return string
     */
    private function generateNewFileName($filename)
    {
        $ipClient    = time() . uniqid() . rand(111111, 999999) . rand(111111, 999999);
        $frefix      = date("Y_m_d") . '___' . strtotime(date("Y_m_d")) . '___';
        $nFilename   = str_replace('.', '--', $filename);
        $nFilename   = Str::slug($nFilename);
        $filenameMd5 = $frefix . md5($nFilename . $ipClient);

        return $filenameMd5 . '.' . $this->getExtension($filename);
    }

    /**
     * Get config limit file size
     *
     * @return integer
     */
    private function getFileSizeLimit()
    {
        return $this->fileSize;
    }

    /**
     * Get extension
     *
     * @param string $filename
     *
     * @return mixed
     */
    private function getExtension($filename)
    {
        $info = new \SplFileInfo($filename);

        return strtolower($info->getExtension());
    }

    /**
     * Get config extensions
     *
     * @return array
     */
    private function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Kiem tra extension
     *
     * @param  [type] $filename [description]
     *
     * @return [true | false]           [description]
     */
    private function checkExtension($filename)
    {
        $extension = $this->getExtension($filename);

        if (!in_array($extension, $this->extensions))
        {
            return false;
        }

        return true;
    }

    /**
     * Kiem tra dung luong upload cho phep
     *
     * @param  [type] $filename [description]
     *
     * @return [true | false]           [description]
     */
    private function checkFileSizeLimit($filename)
    {
        if (filesize($filename) / 1024 > $this->fileSize)
        {
            return false;
        }

        return true;
    }
}
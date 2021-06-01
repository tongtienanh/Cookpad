# File Uploader
File upload with local and s3 (Minio)

Ready on framework:
- [x] laravel framework
- [] lumen framework

## Compatibility
- PHP >= 7.1
- workable/core: `composer require workable/core`
- workable/helper: `composer require workable/helper`
- illuminate/support:^6.0: `composer require illuminate/support:^6.0` 
- intervention/image:^2.5: `composer require intervention/image:^2.5`


### Publish Configuration File
```bash
	php artisan vendor:publish --provider="Workable\FileUploader\FileUploaderServiceProvider" --tag="config"
```

##Uploader package
**Features**
- [x] Upload file: image|pdf|docx|xlx
- [x] Upload multiple
- [x] Upload base64
- [x] Upload from link

**Driver support**
- [x] Default: upload into local
- [] s3 Minio: upload with filesystem s3 config

## How to use
Register a singleton Upload ||  Register a singleton ImageFactory:

```
# Register factory Uploader
$app->singleton('Uploader', function() {
    return new \Workable\FileUploader\Core\Uploads\Uploader(new \Workable\FileUploader\Core\Uploads\Upload());
});

# Register factory imageUploader
$app->singleton('ImageUploader', function() {
    $uploader = App::make('Uploader');
    $image    = App::make('Workable\FileUploader\Core\Images\Image');
    return new \Workable\FileUploader\Core\Images\ImageFactory($uploader, $image);
});

```

## Test upload env local
**1. Định dạng hình ảnh**
- [x] Base 64
- [x] Upload from link
- [x] Upload
- [x] Upload Multiple
- [x] Format: png, jpg, gift, webapp, jpeg
- [x] Not enable: css,js, php...
- [x] Limit - 480KB
- [x] Thumbs
- [x] Resize
- [x] Crop
- [] Watermark

**2. Định dạng pdf, docx, docs..**
- [x] limit 1MB
- [x] upload
- [x] extension
- [x] upload multi

## Upload env cdn: 123job.vn
**1. Định dạng hình ảnh**
- [x] Base 64
- [x] Upload from link
- [x] Upload
- [] Upload Multiple
- [x] Format: png, jpg, gift, webapp, jpeg
- [x] Not enable: css,js, php...
- [x] Limit - 480KB
- [x] Thumbs
- [x] Resize
- [x] Crop
- [] Watermark

**2. Định dạng pdf, docx, docs..**
- [x] limit 1MB
- [x] upload
- [x] extension
- [x] upload multi
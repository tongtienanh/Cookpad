<?php
namespace Workable\FileUploader;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Workable\Base\Supports\Helper;
use Workable\Base\Traits\LoadAndPublishDataTrait;
use Workable\FileUploader\Console\ConfigFileUploaderCommand;

class FileUploaderServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot()
    {
        Helper::autoload(__DIR__ . '/../helper');
        $this->setNamespace('packages/file-uploader')
            ->loadAndPublishConfigurations([
                    'config', 'image', 'upload', 'upload_file', 'upload_image'
            ])
            ->loadMigrations()
            ->loadAndPublishViews()
            ->loadRoutes(['web', 'api']);

        $this->commands([
            ConfigFileUploaderCommand::class
        ]);
    }

    public function register()
    {
        $this->app->bind('file-uploader', function () {
            return new FileUploader();
        });

        $this->app->singleton('Uploader', function() {
            return new \Workable\FileUploader\Core\Uploader(new \Workable\FileUploader\Core\Upload());
        });

        $this->app->singleton('ImageUploader', function() {
            $uploader = App::make('Uploader');
            return new \Workable\FileUploader\Core\Images\ImageFactory($uploader);
        });
    }
}

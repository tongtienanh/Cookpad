<?php

return [
    // Các file được phép upload
    'extensions'    => ['gif', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'pdf', 'bmp', 'js', 'css', 'webp'],
    'file_size'     => 2048,
    'upload_folder' => 'uploads',
    'static_url'    => env('URL_STATIC_FILE', 'https://cdn.123job.vn/'),
    'default'       => env('DRIVER_UPLOAD', 'default'),
    'driver'        => [
        'default' => [
            'name'             => 'local',
            'driver'           => 'local',
            'root'             => base_path(),
            'path'             => public_path(),
            "process_upload"   => \Workable\FileUploader\Core\Driver\UploadDefault::class,
            'process_optimize' => \Workable\FileUploader\Core\Images\ImageOptimizeDefault::class
        ],
        'minio'   => [
            'name'                    => 'minio',
            'driver'                  => 's3',
            'endpoint'                => env('MINIO_ENDPOINT', 'https://cdn.123job.vn/'),
            'use_path_style_endpoint' => true,
            'key'                     => env('AWS_ACCESS_KEY'),
            'secret'                  => env('AWS_SECRET_KEY'),
            'region'                  => env('AWS_REGION'),
            'bucket'                  => env('AWS_BUCKET'),
            'path'                    => '',
            'root'                    => '/',
            'url'                     => env('MINIO_ENDPOINT', 'https://cdn.123job.vn/'),
            "process_upload"          => \Workable\FileUploader\Core\Driver\UploadMino::class,
            'process_optimize'        => \Workable\FileUploader\Core\Images\ImageOptimizeMinio::class
        ],
    ]
];
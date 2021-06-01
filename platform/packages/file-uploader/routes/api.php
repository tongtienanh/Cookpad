<?php
Route::group([
  'prefix' => '/api/file-uploader',
  'namespace' => 'Workable\FileUploader\Http\Controllers\Api'
], function () {
    Route::get('/', 'FileUploaderApiController@index');


    Route::group(['prefix'=> '/images/uploads/'], function($id) {
        Route::post('/', 'ImageUploadApiController@upload');
        Route::post('/base64/{item}', 'ImageUploadApiController@uploadFromBase64');
        Route::post('/multi', 'ImageUploadApiController@uploadMulti');
        Route::post('link', 'ImageUploadApiController@uploadFromLink');
    });
});
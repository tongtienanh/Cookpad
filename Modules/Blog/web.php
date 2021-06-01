<?php
Route::group([
    'prefix' => 'blog',
    'namespace' => 'Modules\Blog\Http\Controllers'
], function () {

    Route::get('/', 'BlogController@index');
    Route::get('blog', 'BlogController@blog')->name('blog');
    Route::get('detail', 'BlogController@detail')->name('blog.get.detail');
    Route::get('job_search', 'BlogController@job_search');

});


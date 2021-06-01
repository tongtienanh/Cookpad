<?php

Route::group([
    'prefix'     => 'browse',
    'middleware' => 'locale',
    'namespace'  => 'Modules\Browse\Http\Controllers'
], function ()
{
    Route::get('/company', [
        'as'   => 'get.browse_company.index',
        'uses' => 'BrowseController@company'
    ]);

    Route::get('/skill', [
        'as'   => 'get.browse_skill.index',
        'uses' => 'BrowseController@skill'
    ]);

    Route::get('/career', [
        'as'   => 'get.browse_career.index',
        'uses' => 'BrowseController@career'
    ]);

    Route::get('/location', [
        'as'   => 'get.browse_location.index',
        'uses' => 'BrowseController@location'
    ]);

    Route::get('/university', [
        'as'   => 'get.browse_university.index',
        'uses' => 'BrowseController@university'
    ]);
});

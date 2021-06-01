<?php
use Illuminate\Support\Facades\Route;

Route::get('/detail', 'Main\DetailJobController@detail')->name('detail');
Route::get('/detail_v2', 'Main\DetailJobController@detail_v2')->name('get.detail.v2');
//Route::get('/detail', 'Main\DetailJobController@detail')->name('detail');
Route::get('/upload', 'UploadImage@saveImage')->name('upload');
Route::get('/post', 'PostController@index')->name('post');
Route::group(['prefix' => 'review'], function (){
    Route::get('/', 'ReviewController@index')->name('review');
    Route::get('/profile', 'ReviewController@profile')->name('review_profile');

});
//Route::group(['prefix' => 'table'], function (){
//    Route::get('/', 'TableController@index')->name('table');
//    Route::get('/booking', 'TableController@booking')->name('booking');
//});

Route::get('/search_categories', 'Main\DetailJobController@search_categories');
Route::group(['prefix' => 'setting'], function () {
    Route::get('/', 'SettingController@setting')->name('setting');
    Route::get('/friend_suggestions', 'SettingController@friend_suggestions')->name('friend');
    Route::get('/notification_preferences', 'SettingController@notification')->name('notification');
    Route::get('/protected', 'SettingController@protected')->name('protected');
    Route::get('/terms', 'SettingController@terms')->name('terms');
    Route::get('/community', 'SettingController@community')->name('community');
    Route::get('/cookies', 'SettingController@cookies')->name('cookies');
    Route::get('/FAQ', 'SettingController@FAQ')->name('FAQ');
    Route::get('/license', 'SettingController@license')->name('license');

});
Route::group(['prefix' => 'site_map'], function () {
    Route::get('/', 'Site_mapController@index')->name('get.site_map');
    Route::get('/category', 'Site_mapController@site_map_category')->name('category');


});
Route::get('/regions', 'regionsController@index')->name('regions');

Route::get('/popup', [
    'as'   => 'get.user.popup',
    'uses' => 'WelcomeController@popup'
]);

Route::get('/email', [
    'as'   => 'get.user.get_email',
    'uses' => 'WelcomeController@emailSuccess'
]);

Route::get('/about', [
    'as'   => 'get.about.index',
    'uses' => 'LandingPageController@about'
]);

Route::get('/action', [
    'as'   => 'get.action.index',
    'uses' => 'LandingPageController@action'
]);

Route::get('/change-locale', [
    'as'   => 'post.language.change',
    'uses' => 'LanguageController@changeLanguage'
]);


Route::group([
    'middleware' => 'locale',
    'namespace'  => 'Main'
], function ()
{
    Route::get('/viewjob', [
        'as'   => 'get.detail_job.index',
        'uses' => 'DetailJobController@index'
    ]);

    Route::get('/detail-job', [
        'as'   => 'get.detail_job.get_detail_job',
        'uses' => 'DetailJobController@detailJob'
    ]);

    Route::get('/jobs', [
        'as'   => 'get.search.index',
        'uses' => 'SearchJobController@index'
    ]);

    Route::get('/', [
        'as'   => 'get.home.index',
        'uses' => 'HomeController@index'
    ]);
    Route::get('/s', [
        'as'   => 'get.search.submit',
        'uses' => 'SearchJobController@index'
    ]);
    Route::get('/{slug?}', [
        'as'   => 'get.search.index',
        'uses' => 'SearchJobController@index'
    ]);
});

Route::group(['middleware' => 'locale', 'namespace' => 'CV', 'prefix' => 'cvs'], function ()
{
    Route::get('/template', [
        'as'   => 'get.cv.template',
        'uses' => 'TemplateCVController@index'
    ]);

    Route::get('/show', [
        'as'   => 'get.cv.show',
        'uses' => 'TemplateCVController@show'
    ]);

});

Route::group(['middleware' => 'locale', 'namespace' => 'CoverLetter', 'prefix' => 'cover-letter'], function ()
{
    Route::get('/template', [
        'as'   => 'get.cover_letter.template',
        'uses' => 'TemplateCoverLetterController@index'
    ]);

    Route::get('/show', [
        'as'   => 'get.cover_letter.show',
        'uses' => 'TemplateCoverLetterController@show'
    ]);

});


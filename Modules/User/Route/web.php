<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function (){
Route::get('/', 'ProfileController@index')->name('profile');
Route::get('/recipes', 'ProfileController@recipes')->name('recipes');
Route::get('/sent_cooksnaps', 'ProfileController@sent')->name('sent_cooksnaps');
Route::get('/user_info', 'ProfileController@user_info')->name('user_info');
Route::get('/collection', 'ProfileController@profile_collections')->name('profile_collections');
Route::get('/history', 'ProfileController@profile_history')->name('profile_history');
Route::get('/detail_collection', 'ProfileController@detail_collection')->name('detail_collection');
Route::get('/news_post', 'ProfileController@news_post')->name('news_post');
Route::get('/videos', 'ProfileController@videos_profile')->name('videos_profile');
});

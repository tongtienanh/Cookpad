<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('review')->group(function() {
    Route::get('/', 'ReviewController@index')->name('review');
    Route::get('profile', 'ReviewController@profile');
    Route::get('/detail', 'ReviewController@detail')->name('get.review.detail');
    Route::get('/search', 'ReviewController@search');
    Route::get('/post', 'ReviewController@post')->name('review_post');
});

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

Route::prefix('now')->group(function() {
    Route::get('/', 'NowController@index');
    Route::get('/table', 'NowController@table')->name('booking');
    Route::get('/booking', 'NowController@booking');
    Route::get('/eat_search', 'NowController@eat_search');
    Route::get('/eat_collections', 'NowController@eat_collections')->name('eat_collections');
});

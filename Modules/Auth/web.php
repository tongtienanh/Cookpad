<?php
Route::group([
    'prefix'    => 'auth',
    'middleware' => 'Auth-log',
    'namespace' => 'Modules\Auth\Http\Controllers'],
    function ()
    {
        Route::get('/register', [
            'as' => 'get.auth.register',
            'uses' => 'AuthController@register'
        ]);
        Route::post('/register', [
            'as' => 'post.auth.register',
            'uses' => 'AuthController@Postregister'
        ]);

        Route::get('/login', [
            'as' => 'get.auth.login',
            'uses' => 'AuthController@login'
        ]);
        Route::post('/login', [
            'as' => 'post.auth.login',
            'uses' => 'AuthController@postlogin'
        ]);

        Route::get('/forgot-pass', [
            'as' => 'get.auth.forgot_pass',
            'uses' => 'AuthController@forgotPass'
        ]);

        Route::get('/complete', [
            'as' => 'get.auth.complete',
            'uses' => 'AuthController@complete'
        ]);
    }
);

<?php
use Illuminate\Support\Facades\Config;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Config::set('auth.defines', 'admin');
    Route::get('login', 'AdminAuthController@login');
    Route::post('login', 'AdminAuthController@doLogin');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
            return view('admin.home');
        });
        Route::any('logout', 'AdminAuthController@logout');

    });
});

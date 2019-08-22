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

Route::get('/login',array(
    'as'=>'en.auth.show',
    'uses'=>'english\AuthController@show'
    ));
Route::post('/login',array(
    'as'=>'en.auth.login',
    'uses'=>'english\AuthController@login'
    ));
Route::post('/logout',array(
    'as'=>'en.auth.logout',
    'uses'=>'english\AuthController@logout'
    ));
Route::post('/password/code',array(
    'as'=>'en.auth.sendCode',
    'uses'=>'english\AuthController@sendCode'
    ));
Route::post('/password/reset',array(
    'as'=>'en.auth.reset',
    'uses'=>'english\AuthController@reset'
    ));

Route::group(['middleware' => ['checkAuth']], function ()
{
    Route::get('/',array(
        'as'=>'en.home.index',
        'uses'=>'english\HomeController@index'
        ));

    /* Profile */
    Route::get('/profile',array(
        'as'=>'en.profile.index',
        'uses'=>'english\ProfileController@index'
        ));

    Route::post('/profile/image/upload',array(
        'as'=>'en.profile.uploadProfileImage',
        'uses'=>'english\ProfileController@uploadProfileImage'
        ));

});

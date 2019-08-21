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

Route::get('/',array(
    'as'=>'en.home.index',
    'uses'=>'english\HomeController@index'
    ));

/* Panel Routes */
Route::get('/admin/login',array(
      'as'=>'admin.login.index',
      'uses'=>'Admin\LoginController@index'
      ));
Route::post('/login',array(
    'as'=>'admin.home.login',
    'uses'=>'Admin\LoginController@login'
    ));
Route::post('/logout',array(
    'as'=>'admin.home.logout',
    'uses'=>'Admin\LoginController@logout'
    ));

Route::group(['middleware' => ['checkAdmin']], function ()
{
    Route::prefix('admin')->group(function ()
    {
        Route::get('/',array(
                'as'=>'admin.home.index',
                'uses'=>'Admin\HomeController@index'
                ));

        /* Media */
        Route::get('/media',array(
            'as'=>'admin.media.index',
            'uses'=>'Admin\MediaController@index'
            ));
        Route::post('/media_upload',array(
            'as'=>'admin.media.upload',
            'uses'=>'Admin\MediaController@uploadSubmit'
            ));
        Route::post('/media_delete',array(
            'as'=>'admin.media.delete',
            'uses'=>'Admin\MediaController@deleteFile'
            ));

        /* Users */
        Route::get('/importExportView',array(
            'as'=>'admin.users.importview',
            'uses'=>'Admin\UserController@importExportView'
            ));
        Route::post('/importUsers',array(
            'as'=>'admin.users.import',
            'uses'=>'Admin\UserController@import'
            ));




    });
});

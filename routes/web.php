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
      'as'=>'admin.home.show',
      'uses'=>'Admin\LoginController@show'
      ));

Route::post('/login',array(
    'as'=>'admin.home.login',
    'uses'=>'Admin\LoginController@login'
    ));
Route::group(['middleware' => ['checkAuth']], function ()
{
	Route::group(['middleware' => ['checkAdmin']], function ()
	{
        Route::prefix('admin')->group(function ()
        {
		    Route::get('/',array(
		          'as'=>'admin.home.index',
		          'uses'=>'Admin\LoginController@index'
                  ));


        });
    });
});

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

Route::group(['middleware' => ['checkAuth']], function ()
{
    Route::get('/',array(
        'as'=>'en.home.index',
        'uses'=>'english\HomeController@index'
        ));
});

/* Panel Routes */
Route::get('/admin/login',array(
      'as'=>'admin.login.index',
      'uses'=>'Admin\LoginController@index'
      ));
Route::post('/admin/login/panel',array(
    'as'=>'admin.home.login',
    'uses'=>'Admin\LoginController@login'
    ));
Route::post('/admin/logout',array(
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

        /* Coordinators */
        Route::resource('coordinators', 'Admin\CoordinatorController')->names([
            'index' => 'admin.coordinators.index',
            'edit'  => 'admin.coordinators.edit',
            'update'  => 'admin.coordinators.update',
            'destroy'  => 'admin.coordinators.destroy',
        ]);
        Route::post('/importCoordinators',array(
            'as'=>'admin.coordinators.import',
            'uses'=>'Admin\CoordinatorController@import'
            ));


        /* Employees */
        Route::resource('employees', 'Admin\EmployeeController')->names([
            'index' => 'admin.employees.index',
            'edit'  => 'admin.employees.edit',
            'update'  => 'admin.employees.update',
            'destroy'  => 'admin.employees.destroy',
        ]);
        Route::post('/importEmployees',array(
            'as'=>'admin.employees.import',
            'uses'=>'Admin\EmployeeController@import'
            ));

        /* Department */
        Route::resource('departments', 'Admin\DepartmentController')->names([
            'index' => 'admin.departments.index',
            'edit'  => 'admin.departments.edit',
            'store'  => 'admin.departments.store',
            'update'  => 'admin.departments.update',
            'destroy'  => 'admin.departments.destroy',
        ]);

        /* Branch */
        Route::resource('branches', 'Admin\BranchController')->names([
            'index' => 'admin.branches.index',
            'edit'  => 'admin.branches.edit',
            'store'  => 'admin.branches.store',
            'update'  => 'admin.branches.update',
            'destroy'  => 'admin.branches.destroy',
        ]);

        /* Category */
        Route::resource('categories', 'Admin\CategoryController')->names([
            'index' => 'admin.categories.index',
            'edit'  => 'admin.categories.edit',
            'store'  => 'admin.categories.store',
            'update'  => 'admin.categories.update',
            'destroy'  => 'admin.categories.destroy',
        ]);


    });
});

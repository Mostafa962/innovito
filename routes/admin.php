<?php

/*
| Panel Routes
*/

Route::get('login',array(
    'as'=>'admin.login.index',
    'uses'=>'Admin\LoginController@index'
    ));
Route::post('login/panel',array(
  'as'=>'admin.home.login',
  'uses'=>'Admin\LoginController@login'
  ));
Route::post('logout',array(
  'as'=>'admin.home.logout',
  'uses'=>'Admin\LoginController@logout'
  ));

Route::group(['middleware' => ['checkAdmin'], 'as' => 'admin.', 'namespace' => 'Admin'], function ()
{
        // Route::resource('categories', 'Admin\CategoryController')->names([
        //     'index'   => 'admin.categories.index',
        //     'edit'    => 'admin.categories.edit',
        //     'store'   => 'admin.categories.store',
        //     'update'  => 'admin.categories.update',
        //     'destroy' => 'admin.categories.destroy',
        // ]);


        Route::get('/',array(
                'as'=>'home.index',
                'uses'=>'HomeController@index'
                ));

        /* Media */
        Route::get('/media',array(
            'as'=>'media.index',
            'uses'=>'MediaController@index'
            ));
        Route::post('/media_upload',array(
            'as'=>'media.upload',
            'uses'=>'MediaController@uploadSubmit'
            ));
        Route::post('/media_delete',array(
            'as'=>'media.delete',
            'uses'=>'MediaController@deleteFile'
            ));

        /* Users */
        Route::get('/importExportView',array(
            'as'=>'users.importview',
            'uses'=>'UserController@importExportView'
            ));
        Route::post('/importUsers',array(
            'as'=>'users.import',
            'uses'=>'UserController@import'
            ));

        /* Coordinators */
        Route::resource('coordinators', 'CoordinatorController');
        Route::post('/importCoordinators',array(
            'as'=>'coordinators.import',
            'uses'=>'CoordinatorController@import'
            ));


        /* Employees */
        Route::resource('employees', 'EmployeeController');
        Route::post('/importEmployees',array(
            'as'=>'employees.import',
            'uses'=>'EmployeeController@import'
            ));

        /* Department */
        Route::resource('departments', 'DepartmentController');

        /* Branch */
        Route::resource('branches', 'BranchController');

        /* Category */
        Route::resource('categories', 'CategoryController');

});

<?php

Route::namespace('Admin')->group(function () {
    Route::any('login', 'PublicController@login')->name('admin_login');
    Route::get('logout', 'PublicController@logout')->name('admin_logout');

    Route::get('/', 'IndexController@index')->name('admin_index');
    Route::get('main', 'IndexController@main')->name('admin_main');
    Route::get('test', 'IndexController@test')->name('admin_test');

    Route::prefix('sys_users')->group(function () {
        Route::get('index', 'SysUsersController@index')->name('admin_sys_users_index');
        Route::match(['get', 'post'], 'add', 'SysUsersController@add')->name('admin_sys_users_add');
        Route::match(['get', 'post'], 'edit', 'SysUsersController@edit')->name('admin_sys_users_edit');
        Route::post('del', 'SysUsersController@del')->name('admin_sys_users_del');
    });

    Route::prefix('sys_roles')->group(function () {
        Route::get('index', 'SysRolesController@index')->name('admin_sys_roles_index');
        Route::match(['get', 'post'], 'add', 'SysRolesController@add')->name('admin_sys_roles_add');
        Route::match(['get', 'post'], 'edit', 'SysRolesController@edit')->name('admin_sys_roles_edit');
        Route::post('del', 'SysRolesController@del')->name('admin_sys_roles_del');
    });
});

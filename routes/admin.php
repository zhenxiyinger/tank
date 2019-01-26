<?php

Route::namespace('Admin')->group(function () {
    Route::any('/login', 'PublicController@login')->name('admin_login');
    Route::get('/logout', 'PublicController@logout')->name('admin_logout');

    Route::get('/', 'IndexController@index')->name('admin_index');
    Route::get('/main', 'IndexController@main')->name('admin_main');
});

<?php

Route::namespace('Home')->group(function () {
    Route::any('/test', 'TestController@index')->name('home_test');
});

<?php

Route::get('/', 'MainController@index');

Route::resource('admin', 'AdminController');

Route::get('/test', 'MainController@showTest');

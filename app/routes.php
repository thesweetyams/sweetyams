<?php

Route::get('/', 'MainController@index');

Route::resource('admin', 'AdminController');

Route::get('/test', 'MainController@showTest');
Route::resource('menu', 'MenuController');

Route::get('/emailform', 'MainController@setUpEmail');
Route::post('/email', 'MainController@doContact');

Route::get('/location', 'MainController@location');

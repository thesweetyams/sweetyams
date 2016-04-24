<?php

Route::get('/', 'MainController@index');

Route::resource('admin', 'AdminController');

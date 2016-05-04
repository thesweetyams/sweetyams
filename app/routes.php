<?php
// App::bind('Acme\Billing\BillingInterface', 'Acme\Billing\StripeBilling');
Route::get('/', 'MainController@index');


Route::resource('admin', 'AdminController');
Route::get('/orders/confirm', 'OrdersController@confirmOrder');
Route::resource('orders', 'OrdersController');
Route::resource('menu', 'MenuController');

	
Route::get('/emailform', 'MainController@setUpEmail');
Route::post('/email', 'MainController@doContact');
Route::get('/test', 'MainController@showTest');
Route::get('/location', 'MainController@sweetyamsLocation');
Route::get('/direction', 'MainController@sweetyamsDirection');
Route::get('/juice', 'MainController@setUpJuiceSubscription');
Route::get('/catering', 'MainController@setUpCatering');
Route::get('/aboutus', 'MainController@setUpAboutUs');
Route::get('/blog', 'MainController@setUpBlog');
Route::get('/events', 'MainController@setUpEvents');
Route::get('/projects', 'MainController@setUpProjects');


Route::get('/order', 'MenuController@setUpOrdering');
Route::post('/order', 'MainController@charge');


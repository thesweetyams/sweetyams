<?php
// App::bind('Acme\Billing\BillingInterface', 'Acme\Billing\StripeBilling');
Route::get('/', 'MainController@index');

Route::resource('admin', 'AdminController');

Route::get('/test', 'MainController@showTest');
Route::resource('menu', 'MenuController');
Route::resource('orders', 'OrdersController');
Route::get('/emailform', 'MainController@setUpEmail');
Route::post('/email', 'MainController@doContact');

Route::get('/location', 'MainController@sweetyamsLocation');
Route::get('/direction', 'MainController@sweetyamsDirection');

Route::get('/juice', 'MainController@setUpJuiceSubscription');
Route::get('/catering', 'MainController@setUpCatering');
Route::get('/order', 'MenuController@setUpOrdering');
Route::get('/aboutus', 'MainController@setUpAboutUs');
Route::get('/blog', 'MainController@setUpBlog');
Route::get('/events', 'MainController@setUpEvents');
Route::get('/projects', 'MainController@setUpProjects');

<<<<<<< HEAD
=======
Route::post('/order', 'MainController@charge');
>>>>>>> cbb40fa25bd98c31bc0dcc9a49a55928e84ca6f0

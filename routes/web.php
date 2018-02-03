<?php
/*
|--------------------------------------------------------------------------
| Web Routes


*/

Route::get('/','UrlsController@create')->name("home_path");

Route::post('/','UrlsController@store');
	
Route::get('/{short}','UrlsController@show');

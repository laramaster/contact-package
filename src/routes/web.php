<?php



Route::group(['namespace' => 'arafat\contact\http\controllers'],function(){
	Route::get('/contact', 'ContactController@index');

	Route::post('/contacts','ContactController@send')->name('contact');
});



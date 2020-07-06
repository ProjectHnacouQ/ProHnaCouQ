<?php

	
	Route::group(['prefix' => 'user'],function(){
	Route::get('/','userController@index')->name('user_index');
	Route::get('delete-{id}','userController@delete')->name('user_delete');
	Route::post('add','userController@post_add')->name('user_add');
	Route::get('add','userController@add')->name('user_add');
	Route::get('update-{id}','userController@update')->name('user_update');
	Route::post('update-{id}','userController@post_update')->name('user_update');
});

 ?>
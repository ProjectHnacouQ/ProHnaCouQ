<?php 

Route::group(['prefix' => 'Category'],function(){
	Route::get('/','CategoryController@index')->name('cat-index');
	Route::get('cate_del-{id}','CategoryController@cate_del')->name('cate_del');
	Route::post('cate_add','CategoryController@post_add')->name('cate_add');
	Route::get('cate_add','CategoryController@add')->name('cate_add');
	Route::get('cate_update-{id}','CategoryController@update')->name('cate_update');
	Route::post('cate_update-{id}','CategoryController@post_update')->name('cate_update');
});
?>
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*

*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'],function(){
	Route::get('admin','adminController@admin')->name('admin');
	Route::get('index','adminController@index');

	include 'Category.php';
	include 'user.php';
});
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('/category', array('as' => 'category', 'uses' => 'CategoryController@index'));
Route::get('/category/{id}', array('as' => 'category.get', 'uses' => 'CategoryController@get'));
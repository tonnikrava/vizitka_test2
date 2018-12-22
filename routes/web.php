<?php

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::match(['get','post'],'forma',['uses'=>'MainController@forma','as'=>'forma']);
Route::get('{page}',['uses'=>'MainController@spets','as'=>'spets']);
Route::get('/',['uses'=>'MainController@getIndex','as'=>'indexpage']);




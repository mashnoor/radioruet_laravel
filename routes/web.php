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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/onlinemsg','AdminController@getOnlineMsg');
Route::get('/admin/secretmsg','AdminController@getSecretMsg');
Route::get('/admin/showname','AdminController@gotoShowname');
route::post('/admin/showname','AdminController@postShowname');
Route::get('/getshowname','ListenerController@get_showname');
Route::get('/admin/getshowname','ListenerController@get_showname');

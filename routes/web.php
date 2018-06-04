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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/onlinemsg', 'AdminController@getOnlineMsg')->name('onlinemsg');
Route::get('/admin/secretmsg', 'AdminController@getSecretMsg')->name('secretmsg');
Route::get('/admin/showname', 'AdminController@gotoShowname')->name('showname');
Route::post('/admin/showname', 'AdminController@postShowname')->name('postshowname');
Route::get('/admin/schedule', 'AdminController@goSchedule')->name('schedule');
Route::get('/admin/notification', 'NotificationController@getNotificationView')->name('notification');


//API (For Backward Compatability)


Route::post('/setonlinemsg', 'ListenerController@postOnlineMsg');
//Route::get('/onlinemsg','MsgController@getOnlineMsg');
Route::post('/setsecretmsg', 'ListenerController@postSecretMsg');
//Route::get('/secretmsg','MsgController@getSecretMsg');

Route::post('/saveuser', 'ListenerController@saveUser');

Route::get('/getshowname', 'ListenerController@getShowName');
Route::post('/adddevice', 'ListenerController@addOrUpdateDevice');



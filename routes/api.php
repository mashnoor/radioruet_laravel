<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::post('/onlinemsg','ListenerController@postOnlineMsg');
//route::get('/onlinemsg','MsgController@getOnlineMsg');
route::post('/secretmsg','ListenerController@postSecretMsg');
//route::get('/secretmsg','MsgController@getSecretMsg');
route::get('/archive','AdminController@getArchive');

route::post('/devices','AdminController@getDevices');

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OnlineMsg;
use App\SecretMsg;
use App\Archive;
use App\Devices;

class ListenerController extends Controller
{
    function postOnlineMsg (Request $request)
  {
	$onlinemsg = new OnlineMsg();

	$onlinemsg->name =  $request->name;
	$onlinemsg->department =  $request->department;
	$onlinemsg->series =  $request->series;
	$onlinemsg->message =  $request->message;

	$onlinemsg->save();
  return "Success";

  }

  function postSecretMsg(Request $Request)
  {
  		$secretmsg = new SecretMsg;
  		$secretmsg->msg = $Request->msg;
  		$secretmsg->save();

  }

    function getDevices(Request $request)
{

  $devices = new Devices();
  $devices->imie = $request->imie;
  $request-> save();
  
}


}

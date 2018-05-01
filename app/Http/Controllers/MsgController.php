<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OnlineMsg;
use App\SecretMsg;
use App\Archive;
use App\Devices;

class MsgController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    } 

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

  function getOnlineMsg()
  {
    $onlinemsg = OnlineMsg::all();
    //return $onlinemsg;
    return view('onlinemsg') -> with('onlinemsg', $onlinemsg);
  }

  function postSecretMsg(Request $Request)
  {
  		$secretmsg = new SecretMsg;
  		$secretmsg->msg = $Request->msg;
  		$secretmsg->save();

  }

  function getSecretMsg()
  {
    $secretmsg = SecretMsg::all();
    return view('secretmsg') -> with('secretmsg', $secretmsg);
  }
  function getArchive()
 {
      $archive = Archive::all();
      return $archive;

  }

  function check()
  {
    return view('check');
  }

  function getDevices(Request $request)
{

  $devices = new Devices();
  $devices->imie = $request->imie;
  $request-> save();
  return 'Success';
}
}

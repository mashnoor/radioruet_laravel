<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OnlineMsg;
use App\SecretMsg;
use App\Archive;
use App\Devices;
use App\Showname;

class AdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    } 

 function getOnlineMsg()
  {
    $onlinemsg = OnlineMsg::all();
    //return $onlinemsg;
    return view('onlinemsg') -> with('onlinemsg', $onlinemsg);
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


 function gotoShowname()

 {
return view('showname');

 }

 function postShowname(request $request)

 {
 	$showname = new Showname();
  $showname->name = $request->name;
  $request-> save();
  return 'Good Job!!';

 }


}

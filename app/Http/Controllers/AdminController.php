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

 function postShowname(Request $request)

 {
  $showname = new Showname();
  $showname->name = $request->name;
  $showname-> save();
  return "GOOD";

 }

 function get_showname()

  {

    $show_name =  DB::select("SELECT * FROM showname where created_at = (select max(created_at) FROM showname)");

    return view('LatestShowname')->with('show_name',$show_name);
  }




}

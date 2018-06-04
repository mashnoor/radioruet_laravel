<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OnlineMsg;
use App\SecretMsg;
use App\Archive;
use App\Device;
use App\showname;

class ListenerController extends Controller
{
    function postOnlineMsg(Request $request)
    {
        $onlinemsg = new OnlineMsg();

        $onlinemsg->name = $request->name;
        $onlinemsg->department = $request->department;
        $onlinemsg->series = $request->series;
        $onlinemsg->message = $request->message;

        $onlinemsg->save();
        return "Success";

    }

    function postSecretMsg(Request $Request)
    {
        $secretmsg = new SecretMsg;
        $secretmsg->msg = $Request->message;
        $secretmsg->save();

        return 'success';

    }

    function saveUser(Request $request)
    {

        $device = new Device();
        $device->imie = $request->imei;
        $device->save();

        return 'success';

    }

    function getShowName()

    {
        $show_name = Showname::orderBy('created_at', 'desc')->first();
        return $show_name->name;

    }

    function addOrUpdateDevice(Request $request)
    {
        $imei = $request->get('imei');

        $device = Device::where('imei', $imei)->first();
        if ($device == null) {
            $device = new Device();
            $device->imei = $imei;
            $device->token = $request->get('token');

            $device->save();

            return 'success';
        } else {
            $device->token = $request->get('token');
            $device->save();
            return 'success';
        }
    }


}

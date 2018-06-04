<?php

namespace App\Http\Controllers;


class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function getNotificationView()
    {
        return view('notification');
    }
}

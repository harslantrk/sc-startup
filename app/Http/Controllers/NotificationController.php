<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\User;
use App\Notification;

class NotificationController extends Controller
{
    public function loadNotification(){
        $user = Auth::user();
        $notification=DB::table('notification')
            ->join('users', 'notification.user_id', '=', 'users.id')
            ->join('users as user', 'notification.target_id', '=', 'user.id')
            ->orderBy('notification.created_at', 'desc')
            ->select('notification.*','users.username')
            ->where('notification.target_id', $user->id)
            ->where('notification.status', 0)
            ->get();
        $notiCount = Notification::where('status', 0)->where('target_id', $user->id)->count();
        /*echo "<pre>";
        print_r($notification);
        die();*/
        return view('notification.notification',['notification' => $notification, 'notiCount' => $notiCount, 'user' => $user]);
    }
    public function deleteNtfn(Request $request)
    {
        $user = Auth::user();
        $ntfnid = $request->ntfnid;
        DB::table('notification')->where('id', $ntfnid)->where('target_id', $user->id)->delete();

    }
}

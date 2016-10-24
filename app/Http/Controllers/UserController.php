<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\User;
use App\Follow;
use App\Helpers\Helper;

class UserController extends Controller
{
    public function showProfile($username){
        $userauth = Auth::user();
        $followerCount = Follow::where('follow_id', $userauth->id)->count();
        $followCount = Follow::where('user_id', $userauth->id)->count();
        if($userauth->username == $username)
        {
            $user = User::where('id', $userauth->id)->where('username', $username)->first();
            $notification = DB::table('notification')
                ->where('target_id', $userauth->id)
                ->orderBy('id', 'desc')
                ->limit(20)
                ->get();
            return view('profile.editprofile',['profilUser' => $user, 'notification' => $notification]);
        }
        else
        {
            $authuser = Auth::user();
            $user = User::where('username', $username)->first();
            $follow = Follow::where('user_id', $authuser->id)->where('follow_id', $user->id)->first();
            if(isset($follow))
            {
                $followStatus="1";
            }
            else
            {
                $followStatus="0";
            }
            return view('profile.profile',['profilUser' => $user, 'followStatus' => $followStatus, 'followerCount' => $followerCount, 'followCount' => $followCount]);
        }
    }
    public function updateUser(Request $request){
        $authuser = Auth::user();
        $user = User::find($authuser->id)->first();
        $user->update($request->all());
        $skills = $request->inputSkills;
        return redirect()->back();
    }
    public function userFollow(Request $request)
    {
        $followId = $request->followId;
        $user = Auth::user();
        $checkUser = Follow::where('user_id', $user->id)->where('follow_id', $followId)->first();
        if(isset($checkUser))
        {
            $checkUser->delete();
        }
        else
        {
            $userFollow = new Follow();
            $userFollow->user_id = $user->id;
            $userFollow->follow_id = $followId;
            $userFollow->ipaddress = $request->ip();
            $userFollow->save();
            //$this->notification($user->id, $followId, "3", "/allNotification/", "0");
            Helper::notification($user->id, $followId, "3", "/allNotification/", "0");
        }
    }
}

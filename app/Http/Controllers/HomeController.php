<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use DB;
use App\User;
use App\Share;
use App\ShareLike;
use App\ShareComment;
use App\Follow;
use Carbon\Carbon;
use DateTime;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $user = Auth::user();
        return view('home',['user' => $user]);
    }
    public function showMarket(){
        return view('market');
    }
    public function createCoupon(){
        return view('coupon');
    }
    public function logOut(){
        Auth::logout();
        return redirect()->back();
    }
    public function deneme(){
        return view('static');
    }
    public function test(){

        $user = Auth::user();
        $date1 = new DateTime($user->created_at);
        $date1 = $date1->format('Y-m-d H:i:s');
        echo "<pre>";
        print_r($date1);
        die();
        /*****************************************
         $date1 = Carbon::now()->format('d-m-Y');

        $notification = DB::table('notification')
        ->where('target_id', $userauth->id)
        ->select('created_at', 'id')
        ->groupBy('created_at','id')
        ->orderBy('created_at', 'desc')
        ->get();
        $ntfnDate = DB::table('notification')
        ->select(DB::raw('DATE_FORMAT(created_at, "%d-%m-%Y") as deneme') )
        ->where('target_id', $userauth->id)
        ->groupBy('deneme')
        ->orderBy('created_at', 'desc')
        ->get();

        *******************************************/

    }
}

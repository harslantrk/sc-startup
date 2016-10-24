<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\User;
use App\Share;
use App\ShareLike;
use App\ShareComment;
use App\Helpers\Helper;

class ShareController extends Controller
{
    public function addShare(Request $request){
        $content = $request->inputContent;
        $user = Auth::user();
        $share = new Share();
        $share->user_id = $user->id;
        $share->content = $content;
        $share->ipaddress = $request->ip();
        $share->like_count = 0;
        $share->share_count = 0;
        $share->comment_count = 0;
        $share->status = 0;
        $share->share_id = 0;
        $share->save();

    }
    public function addShareShare(Request $request){
        $shareId = $request->shareId;
        $message = $request->shareContent;
        $user = Auth::user();
        $share = Share::find($shareId);
        $newshare = new Share();
        $newshare->user_id = $user->id;
        $newshare->content = $message;
        $newshare->ipaddress = $request->ip();
        $newshare->like_count = 0;
        $newshare->share_count = 0;
        $newshare->comment_count = 0;
        $newshare->status = 1;
        $newshare->share_id = $shareId;
        $newshare->save();
        $share = Share::find($shareId);
        $share->share_count = $share->share_count+1;
        $share->save();
    }
    public function addShareLike(Request $request){
        $shareId = $request->shareId;
        $user = Auth::user();
        $shareLike = new ShareLike();
        $shareLike->share_id = $shareId;
        $shareLike->user_id = $user->id;
        $shareLike->ipaddress = $request->ip();
        $shareLike->save();
        $share = Share::find($shareId);
        $share->like_count = $share->like_count+1;
        $share->save();

    }
    public function addShareComment(Request $request){
        $shareId = $request->shareId;
        $message = $request->message;
        $user = Auth::user();
        $shareComment = new ShareComment();
        $shareComment->share_id = $shareId;
        $shareComment->user_id = $user->id;
        $shareComment->message = $message;
        $shareComment->ipaddress = $request->ip();
        $shareComment->save();
        $share = Share::find($shareId);
        $share->comment_count = $share->comment_count+1;
        $share->save();

        //$this->notification($user->id, $share->user_id, "1", "/allNotification/", "0");
        Helper::notification($user->id, $share->user_id, "1", "/allNotification/", "0");

    }
    public function loadShare(){
        $user = Auth::user();
        $share=DB::table('share')
            ->join('users', 'share.user_id', '=', 'users.id')
            ->orderBy('share.created_at', 'desc')
            ->select('share.*','users.username')
            ->get();
        $sharelike=DB::table('share_like')
            ->join('share', 'share.id', '=', 'share_like.share_id')
            ->select('share_like.*')
            ->where('share_like.user_id', $user->id)
            ->get();
        $sharecomment=DB::table('share_comment')
            ->join('users', 'users.id', '=', 'share_comment.user_id')
            ->orderBy('share_comment.created_at', 'asc')
            ->select('share_comment.*', 'users.username')
            ->get();
        /*echo "<pre>";
        print_r($sharecomment);
        die();*/
        return view('share.share',['share' => $share, 'shareLike' => $sharelike, 'shareComment' => $sharecomment]);
    }
    public function loadMyShare($user_id){
        $user = Auth::user();
        $share=DB::table('share')
            ->join('users', 'share.user_id', '=', 'users.id')
            ->orderBy('share.created_at', 'desc')
            ->select('share.*','users.username')
            ->where('user_id', $user_id)
            ->get();
        $sharelike=DB::table('share_like')
            ->join('share', 'share.id', '=', 'share_like.share_id')
            ->select('share_like.*')
            ->where('share_like.user_id', $user->id)
            ->get();
        $sharecomment=DB::table('share_comment')
            ->join('users', 'users.id', '=', 'share_comment.user_id')
            ->orderBy('share_comment.created_at', 'asc')
            ->select('share_comment.*', 'users.username')
            ->get();
        /*echo "<pre>";
        print_r($sharecomment);
        die();*/
        return view('share.myshare',['share' => $share, 'shareLike' => $sharelike, 'shareComment' => $sharecomment]);
    }
    public function showShare($shareId){
        $user = Auth::user();
        $share=DB::table('share')
            ->join('users', 'share.user_id', '=', 'users.id')
            ->orderBy('share.created_at', 'desc')
            ->select('share.*','users.username')
            ->where('share.id', $shareId)
            ->get();
        $sharelike=DB::table('share_like')
            ->join('share', 'share.id', '=', 'share_like.share_id')
            ->select('share_like.*')
            ->where('share_like.user_id', $user->id)
            ->get();
        $sharecomment=DB::table('share_comment')
            ->join('users', 'users.id', '=', 'share_comment.user_id')
            ->select('share_comment.*', 'users.*')
            ->get();
        /*echo "<pre>";
        print_r($sharecomment);
        die();*/
        return view('share.copyshare',['share' => $share, 'shareLike' => $sharelike, 'shareComment' => $sharecomment]);
    }
}

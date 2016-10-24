<?php
/**
 * Created by PhpStorm.
 * User: Hasan
 * Date: 17.10.2016
 * Time: 14:35
 */
namespace App\Helpers;
use App\User;
use Session;
use App\Notification;
use Auth;



class Helper
{
    public static function notification($user_id, $target_id, $type, $url, $status)
    {
        $user = Auth::user();
        if($target_id == $user->id)
        {

        }
        else{
            if($type==1)
            {
                //Paylaşıma Yorum Yapıldığında
                $content = $user->username." adlı kullanıcı sizin gönderinize yorum yaptı.";
                $notification = new Notification();
                $notification->user_id = $user_id;
                $notification->target_id = $target_id;
                $notification->type = $type;
                $notification->url = $url;
                $notification->status = $status;
                $notification->content = $content;
                $notification->save();
            }
            elseif($type==2)
            {
                //Paylaşım, Paylaşım Yapıldığında

            }
            elseif($type==3)
            {
                //Takip edildiğinde
                $content = $user->username." adlı kullanıcı sizi takip etti.";
                $notification = new Notification();
                $notification->user_id = $user_id;
                $notification->target_id = $target_id;
                $notification->type = $type;
                $notification->url = $url;
                $notification->status = $status;
                $notification->content = $content;
                $notification->save();
            }
            elseif($type==4)
            {
                //Kupona Yorum Yapıldığında
            }
            elseif($type==5)
            {
                //Kuponu Paylaşıldığında
            }
        }
    }
}
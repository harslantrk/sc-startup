<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\User;
use App\Message;

class MessageController extends Controller
{
    public function saveMessage(Request $request)
    {
        $sender = Auth::user();
        $receiver = $request->receiver;
        $pvMessage = $request->pvMessage;

        $message = new Message();
        $message->sender = $sender->id;
        $message->receiver = $receiver;
        $message->content = $pvMessage;
        $message->status = 0;
        $message->ipconfig = $request->ip();
        $message->save();
    }
    public function showMessage($reciever = "0"){
        $sender = Auth::user();

        $contactList = DB::select("SELECT sender_username.username as sender_username FROM message INNER JOIN users as sender_username ON (message.sender = sender_username.id) INNER JOIN users as receiver_username ON (message.receiver = receiver_username.id) WHERE receiver = '$sender->id' GROUP BY message.sender ORDER BY message.created_at");
        if($reciever=="0")
        {
            return view('message.message', ['status' => '0', 'contactList' => $contactList]);
        }
        else
        {

            $recieverInform = User::where('username', $reciever)->first();
            /*$checkMessage = Message::where('sender', $sender->id)->where('receiver', $recieverInform->id)->andWhere()->get();*/
            $checkMessage = DB::select("SELECT * FROM message WHERE (sender = '$sender->id' and receiver = '$recieverInform->id') or (sender = '$recieverInform->id' and receiver = '$sender->id') ORDER BY created_at");
            /*echo "<pre>";
              print_r($checkMessage);
              die();*/


            if(isset($checkMessage))
            {

                $message = DB::select("SELECT message.*, sender_username.username as sender_username, receiver_username.username as receiver_username FROM message INNER JOIN users as sender_username ON (message.sender = sender_username.id) INNER JOIN users as receiver_username ON (message.receiver = receiver_username.id)WHERE (sender = '$sender->id' and receiver = '$recieverInform->id') or (sender = '$recieverInform->id' and receiver = '$sender->id') ORDER BY message.created_at");
                $messageLast = DB::select("SELECT message.*, sender_username.username as sender_username, receiver_username.username as receiver_username FROM message INNER JOIN users as sender_username ON (message.sender = sender_username.id) INNER JOIN users as receiver_username ON (message.receiver = receiver_username.id)WHERE (sender = '$sender->id' and receiver = '$recieverInform->id') or (sender = '$recieverInform->id' and receiver = '$sender->id') ORDER BY message.created_at DESC LIMIT 0,1");
                /*echo "<pre>";
                print_r($messageLast);
                die();*/
                return view('message.message', ['oldMessage' => $message,'lastMessage' => $messageLast, 'status' => '1', 'receiver' => $recieverInform->id, 'receiverUsername' => $reciever, 'contactList' => $contactList]);
            }
            else
            {
                return view('message.message', ['status' => '2', 'receiver' => $recieverInform->id, 'receiverUsername' => $reciever, 'contactList' => $contactList]);
            }
        }
    }
    public function loadMessage($receiver = "0", $lastid = "0")
    {

        $sender = Auth::user();
        /*$msgSearch = Message::where('secret', $secret)->where('sender', $user->id)->first();*/
        $message = DB::select("SELECT message.*, sender_username.username as sender_username, receiver_username.username as receiver_username FROM message INNER JOIN users as sender_username ON (message.sender = sender_username.id) INNER JOIN users as receiver_username ON (message.receiver = receiver_username.id)WHERE (message.id > '$lastid') and ((sender = '$sender->id' and receiver = '$receiver') or (sender = '$receiver' and receiver = '$sender->id')) ORDER BY message.created_at");
        /*echo "<pre>";
        print_r($message);
        die();*/
        if(empty($message))
        {
            $status = 2;
            return view('message.callmessage', ['status' => $status, 'sender' => $sender, 'receiver' => $receiver]);
        }
        else
        {
            $status = 1;
            return view('message.callmessage', ['status' => $status, 'oldMessage' => $message, 'receiver' => $receiver]);
        }
    }
    public function loadMessageLast(){
        $user = Auth::user();
        $message = DB::select("SELECT message.*, sender_username.username as sender_username, receiver_username.username as receiver_username FROM message INNER JOIN users as sender_username ON (message.sender = sender_username.id) INNER JOIN users as receiver_username ON (message.receiver = receiver_username.id) WHERE (receiver = '$user->id') and status = 0 GROUP BY message.sender ORDER BY message.created_at LIMIT 0,5");
        $msgCount = Message::where('receiver', $user->id)->where('status', '0')->groupBy('receiver')->count();
        /*echo "<pre>";
        print_r($msgCount);
        die();*/
        return view('message.msglist',['message' => $message, 'msgCount' => $msgCount, 'user' => $user]);
    }
}

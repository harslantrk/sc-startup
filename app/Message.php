<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "message";
    protected $fillable = [
        'sender', 'reciever', 'content', 'status', 'ipconfig',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $table = "share";
    protected $fillable = [
        'user_id', 'content', 'ipaddress', 'like_count', 'share_count', 'comment_count', 'status', 'share_id',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareComment extends Model
{
    protected $table = "share_comment";
    protected $fillable = [
        'share_id', 'user_id', 'message', 'ipaddress',
    ];
}

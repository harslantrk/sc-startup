<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareLike extends Model
{
    protected $table = "share_like";
    protected $fillable = [
        'share_id', 'user_id', 'ipaddress',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notification";
    protected $fillable = [
        'user_id', 'target_id', 'type', 'url', 'status', 'content',
    ];
}

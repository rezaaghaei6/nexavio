<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    protected $fillable = [
        'level', 
        'message', 
        'context', 
        'ip', 
        'user_agent', 
        'user_id'
    ];
}

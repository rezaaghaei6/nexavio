<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['title', 'icon', 'description', 'tags'];

    protected $casts = [
        'tags' => 'array',
    ];
}
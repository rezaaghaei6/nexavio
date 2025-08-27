<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'date',
        'excerpt',
        'content',
        'category_id',
        'author',
    ];

    protected $dates = [
        'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category ? $this->category->name : 'دسته‌بندی نشده';
    }
}
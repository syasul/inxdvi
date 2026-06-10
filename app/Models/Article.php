<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'user_id',
        'category',
        'image_path',
        'excerpt',
        'content',
        'status',
        'published_at',
        'tags',
        'author_name',
        'read_time_min',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array',
        'read_time_min' => 'integer',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

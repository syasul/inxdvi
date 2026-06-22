<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppDemo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'image_path',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}

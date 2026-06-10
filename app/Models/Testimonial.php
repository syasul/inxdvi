<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'position',
        'company',
        'industry',
        'quote',
        'rating',
        'photo_url',
        'video_url',
        'is_featured',
        'is_video',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_featured' => 'boolean',
        'is_video' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}

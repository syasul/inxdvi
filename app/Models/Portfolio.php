<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'client_name',
        'image_path',
        'problem_description',
        'solution_description',
        'result_description',
        'is_active',
        // New fields
        'industry',
        'description',
        'challenge',
        'solution',
        'result_metric',
        'thumbnail_url',
        'images',
        'tags',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'sort_order' => 'integer',
        'images' => 'array',
        'tags' => 'array',
    ];
}

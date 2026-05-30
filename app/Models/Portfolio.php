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
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'description',
        'base_price',
        'is_active',
    ];
}

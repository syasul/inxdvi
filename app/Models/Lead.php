<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'business_name',
        'interest',
        'message',
        'status',
    ];
}

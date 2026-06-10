<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'price_monthly',
        'price_yearly',
        'is_popular',
        'is_custom',
        'highlight_color',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_popular' => 'boolean',
        'is_custom' => 'boolean',
        'is_active' => 'boolean',
        'price_monthly' => 'integer',
        'price_yearly' => 'integer',
        'sort_order' => 'integer',
    ];

    public function features()
    {
        return $this->hasMany(PackageFeature::class)->orderBy('sort_order', 'asc');
    }
}

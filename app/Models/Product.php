<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [

        'category_id',
        'name',
        'slug',
        'sku',
        'brand',
        'price',
        'sale_price',
        'stock',
        'weight',
        'length',
        'width',
        'height',
        'short_description',
        'description',
        'featured',
        'status'

    ];

    protected $casts = [

        'featured' => 'boolean',
        'status' => 'boolean',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2'

    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
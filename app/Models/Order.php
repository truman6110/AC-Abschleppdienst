<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [

        'product_id',
        'order_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'street',
        'postal_code',
        'city',
        'country',
        'quantity',
        'message',
        'status',

    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'street',
        'zip',
        'city',
        'country',
        'comment',
        'total',
        'status',

        // Ajouter ces deux lignes
        'payment_proof',
        'payment_sent_at',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
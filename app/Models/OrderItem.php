<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
     /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'quantity',
        'unit_price',
        'subtotal',
        'order_id',
        'product_id',
    ];

    // Define the relationship with the Product model
    function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // Define the relationship with the OrderItem model
    function orderItem():BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}

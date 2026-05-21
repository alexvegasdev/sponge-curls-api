<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'total_price',
        'status',
        'shipping_address',
        'user_id',
    ];

    // Define the relationship with the OrderItem model
    function orderItems():HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    // Define the relationship with the User model
    function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

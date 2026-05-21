<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CurlType extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    // Define the relationship with the Product model
    function products():HasMany
    {
        return $this->hasMany(Product::class);
    }
}

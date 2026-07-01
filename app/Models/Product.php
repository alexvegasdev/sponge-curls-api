<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image_url',
        'brand',
        'category_id'
    ];

    // Define the relationship with the Category model
    function category():BelongsTo
    {
        return $this->belongsTo(Category::class);                           
    }

    // Define the relationship with the CurlType model
    function curlTypes():BelongsToMany
    {
        return $this->belongsToMany(CurlType::class);
    }

}

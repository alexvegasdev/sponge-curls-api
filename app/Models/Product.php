<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'category_id',
        'curl_type_id',
    ];

    // Define the relationship with the Category model
    function category():BelongsTo
    {
        return $this->belongsTo(Category::class);                           
    }

    // Define the relationship with the CurlType model
    function curlType():BelongsTo
    {
        return $this->belongsTo(CurlType::class);
    }

}

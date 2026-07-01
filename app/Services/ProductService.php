<?php

// declare(strict_types=1);

namespace App\Services;

use App\Models\Product;

class ProductService
{
    
    // public function getProductsByCurlType(string $curlType)
    //     {
    //         return Product::whereHas('curlTypes', function ($query) use ($curlType) {
    //             $query->where('curl_types.name', $curlType);
    //         })->get();
    //     }

    public function createProductWithCurlTypes(array $data, array $curlTypeIds): Product
    {
        $product = Product::create($data);
        $product->curlType()->attach($curlTypeIds);
        return $product;
    }

    public function updateProduct(Product $product, array $data): Product
    {
        $product->update($data);
        return $product;
    }
}

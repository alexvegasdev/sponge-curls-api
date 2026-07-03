<?php

// declare(strict_types=1);

namespace App\Services;

use App\Models\Product;

class ProductService
{
    
    public function getProductsByCategoryAndCurlyType(?string $category=null, ?string $curlType=null)
    {
        $product = Product::with('category', 'curlTypes');

        if ($category) {
            $product->whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
            });
        }

        if($curlType){
            $product->whereHas('curlTypes', function ($query) use ($curlType){
                $query->where('name', $curlType);
            });
        }

        return $product->get();
    }

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

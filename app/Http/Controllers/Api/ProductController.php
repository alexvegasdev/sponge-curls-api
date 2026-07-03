<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(private ProductService $productService)
    {
        $this->productService = $productService;
    }
    function index(SearchProductRequest $request)
    {
        $category = $request->input('category');
        $curlType = $request->input('curl_type');

        $products = $this->productService->getProductsByCategoryAndCurlyType($category, $curlType);
        return ProductResource::collection($products);
    }

    function show(Product $product)
    {
        $product = Product::with(['category', 'curlTypes'])->findOrFail($product->id);
        return new ProductResource($product);
    }

    public function store(StoreProductRequest $request)
    {
        $product = $this->productService->createProductWithCurlTypes($request->validated(), $request->validated()['curl_type_ids'] ?? []);
        return new ProductResource($product);
    }

    function update(UpdateProductRequest $request, Product $product)
    {
        $updatedProduct = $this->productService->updateProduct($product, $request->validated());
        return response()->json($updatedProduct, 200);
    }

    function destroy(Product $product)
    {
        $product->delete();
        return response()->json(["success"=>"Deleted product"],200);
    }

}

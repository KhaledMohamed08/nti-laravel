<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();

        return response()->json([
            'status' => 'success',
            'message' => 'products retrived successfully',
            'data' => ProductResource::collection($products),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth('sanctum')->id();

        Product::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'product created successfully',
            'data' => [],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Product Retrived Suuceesfully',
            'data' => new ProductResource($product),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Product Updated Successfully',
            'data' => [],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'status' => 'success',
            'messgae' => 'Product Deleted Successfully',
            'data' => [],
        ]);
    }
}

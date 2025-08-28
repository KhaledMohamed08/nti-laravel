<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        $products = Product::where('stock', '>', 0)->with('user')->get();

        return view('pages.products.products', ['products' => $products]);
    }

    public function show(Product $product)
    {
        // $product = Product::where('id', $id)->first();
        // $product = Product::find($id);
        $product->load('user', 'colors');

        return view('pages.products.show', compact('product'));
    }

    public function create()
    {
        $colors = Color::all();
        return view('pages.products.create', compact('colors'));
    }

    public function store(StoreProductRequest $request)
    {
        // $data = $request->all();
        // $data = $request->validate([
        //     'title' => 'required|string|max:220',
        //     'description' => 'string|max:1000',
        //     'stock' => 'required|numeric|min:0',
        //     'price' => 'required|numeric',
        //     'size' => 'required|string',
        // ]);

        $data = $request->validated();

        $data['user_id'] = auth()->id();

        $product = Product::create($data);

        $product->colors()->sync($request->colors);

        // $product->colors()->create([
        //     'name' => 'gray'
        // ]);

        // $product->colors()->createMany([
        //     ['name' => 'brown'],
        //     ['name' => 'pink'],
        // ]);

        return redirect()->route('products.index')->with('success', 'Product Created Successfully.');
    }

    public function edit(Product $product)
    {
        return view('pages.products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);

        return redirect()->route('products.show', $product->id)->with('success', 'Product Updated Sucessfully.');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product Deleted Successfully.');
    }
}

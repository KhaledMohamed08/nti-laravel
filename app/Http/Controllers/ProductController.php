<?php

namespace App\Http\Controllers;

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

    public function show($id)
    {
        // $product = Product::where('id', $id)->first();
        $product = Product::find($id);
        $product->load('user');

        return view('pages.products.show', ['product' => $product]);
    }

    public function create()
    {
        return view('pages.products.create');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->validate([
            'title' => 'required|string|max:220',
            'description' => 'string|max:1000',
            'stock' => 'required|numeric|min:0',
            'price' => 'required|numeric',
            'size' => 'required|string',
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product Created Successfully.');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('pages.products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:220',
            'description' => 'string|max:1000',
            'stock' => 'required|numeric|min:0',
            'price' => 'required|numeric',
            'size' => 'required|string',
        ]);

        $product = Product::find($id);
        $product->update($data);

        return redirect()->route('products.show', $product->id)->with('success', 'Product Updated Sucessfully.');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product Deleted Successfully.');
    }
}

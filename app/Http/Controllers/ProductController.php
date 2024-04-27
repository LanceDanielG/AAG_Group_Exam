<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function add(Request $request){
        // dd($request);
        $data = $request->validate([
            'product_name' => 'required',
            'product_quantity' => 'required|numeric',
            'product_price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'product_description' => 'required'
        ]);

        $createProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        // dd($product);
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'product_name' => 'required',
            'product_quantity' => 'required|numeric',
            'product_price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'product_description' => 'required'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Successfully Edited');
    }

    public function delete(Product $product){
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product Successfully Deleted');
    }
}
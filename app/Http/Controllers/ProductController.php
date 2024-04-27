<?php

namespace App\Http\Controllers;
## Changes
use Illuminate\Http\Request; //handling HTTP requests
use App\Models\Product; //model representing products

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]); //retrieves all products and passes all in index view
    }

    public function create(){
        return view('products.create'); // returns a view for creating a new product
    }

    public function add(Request $request){ // handles the form submission for adding a new product
        // dd($request); // die dump 
        $data = $request->validate([ //validates the incoming request data
            'product_name' => 'required',
            'product_quantity' => 'required|numeric',
            'product_price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'product_description' => 'required'
        ]);

        $createProduct = Product::create($data); //creates a new product

        return redirect(route('product.index')); //redirects the user to the product index page
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

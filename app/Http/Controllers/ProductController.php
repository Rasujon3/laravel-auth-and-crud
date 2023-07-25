<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        // Show Data
        $products = Product::all(); // get all products
        return view('products.index', ['products' => $products]);
    }
    public function create() {
        return view('products.create');
    }
    public function store(Request $request) {
        
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $newProduct = Product::create($data);
        return redirect('/product')->with('success','Product Created Successfully.');
    }
    public function edit(Product $product) {
        return view('products.edit', ['product' => $product]);
    }
    public function update(Product $product, Request $request) {
        
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $product->update($data);
        return redirect('/product')->with('success','Product Updated Successfully.');
    }
    public function delete(Product $product) {
        $product->delete();
        return redirect('/product')->with('success','Product Deleted Successfully.');
    }
}

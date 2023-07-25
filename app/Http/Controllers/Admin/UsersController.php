<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        // Show Data
        $products = Product::all(); // get all products
        return view('admin.users.index', ['products' => $products]);
    }
    public function create() {
        return view('admin.users.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $newProduct = Product::create($data);
        return redirect(route('users.index'))->with('success','Product Created Successfully.');
    }
    public function edit(Product $product) {
        return view('admin.users.edit', ['product' => $product]);
    }
    public function update(Product $product, Request $request) {
        
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $product->update($data);
        return redirect(route('users.index'))->with('success','Product Updated Successfully.');
    }
    public function delete(Product $product) {
        $product->delete();
        return redirect(route('users.index'))->with('success','Product Deleted Successfully.');
    }
    public function logout() {
        auth()->logout();
        return redirect()->route(route('users.index'))->with('success','Logged out successfully');
    }
}

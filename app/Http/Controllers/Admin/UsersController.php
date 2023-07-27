<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Traits\SharedMethodsTrait;
use App\Http\Controllers\Admin\ShareController;

class UsersController extends Controller
{
    public function index(Request $request)
{
    // $shareController = new ShareController();
        // return $shareController->Share($request);
        // app('App\Http\Controllers\Admin\ShareController')->Share($request);
        ShareController::share($request);
    return view('admin.users.index'); // Assuming 'admin.users.index' is your Blade view for regular HTTP request
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

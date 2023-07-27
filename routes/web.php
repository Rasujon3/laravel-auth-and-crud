<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UsersController;

Route::get('/',[UserController::class, 'OnShow']);
Route::post('/insert',[UserController::class, 'OnInsert']);

Route::get('/login',[UserController::class, 'Login']);
Route::post('/OnLogin',[UserController::class, 'CheckedLogin']);

Route::get('/admin',[UserController::class, 'OnAdmin'])->middleware('LoginCheckUser');
Route::get('/logout',[UserController::class, 'OnLogout']);

// Products
// Route::get('/product',[ProductController::class, 'index'])->name('proudct.index');
// Route::get('/product/create',[ProductController::class, 'create'])->name('proudct.create')->middleware('LoginCheckUser');
// Route::post('/product',[ProductController::class, 'store'])->name('proudct.store')->middleware('LoginCheckUser');
// Route::get('/product/{product}/edit',[ProductController::class, 'edit'])->name('proudct.edit')->middleware('LoginCheckUser');
// Route::put('/product/{product}/update',[ProductController::class, 'update'])->name('proudct.update')->middleware('LoginCheckUser');
// Route::delete('/product/{product}/delete',[ProductController::class, 'delete'])->name('proudct.delete')->middleware('LoginCheckUser');

Route::group(['middleware'=>['LoginCheckUser']],function () {
// Admin LTE
Route::get('/admin/dashboard', [ProfileController::class, "dashboard"])->name('dashboard');
// Product show
Route::get('/admin/products', [UsersController::class, "index"])->name('users.index');
// Route for the Share method in the ShareController
Route::get('/admin/share', [ShareController::class, 'Share'])->name('admin.share');
// Create a Product
Route::get('/admin/product/create', [UsersController::class, "create"])->name('users.create');
Route::post('/admin/product', [UsersController::class, "store"])->name('users.store');
// Update a Product
Route::get('/admin/product/{product}/edit', [UsersController::class, "edit"])->name('users.edit');
Route::put('/admin/product/{product}/update', [UsersController::class, "update"])->name('users.update');
// Delete a Product
Route::delete('/admin/product/{product}/delete', [UsersController::class, "delete"])->name('users.delete');

});
// Route::get('/admin/logout', [UsersController::class, "logout"])->name('logout');

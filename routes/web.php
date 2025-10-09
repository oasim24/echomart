<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InventoriesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RevivewController;
use App\Http\Controllers\Admin\WarehouseController;
use Illuminate\Support\Facades\Route;



Route::get('/mypanel', [LoginController::class, 'index'])->name('login');
Route::post('/mypanel/login', [LoginController::class, 'login'])->name('loginsubmit');
Route::post('/mypanel/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/update/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

Route::get('/brands', [BrandController::class, 'index'])->name('brands');
Route::post('/brands/store', [BrandController::class, 'store'])->name('brands.store');
Route::get('/brands/edit/{id}', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('/brands/update/{id}', [BrandController::class, 'update'])->name('brands.update');
Route::delete('/brands/delete/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::get('/warehouses', [WarehouseController::class, 'index'])->name('warehouses');
Route::post('/warehouses/store', [WarehouseController::class, 'store'])->name('warehouses.store');
Route::get('/warehouses/edit/{id}', [WarehouseController::class, 'edit'])->name('warehouses.edit');
Route::put('/warehouses/update/{id}', [WarehouseController::class, 'update'])->name('warehouses.update');
Route::delete('/warehouses/destroy/{id}', [WarehouseController::class, 'destroy'])->name('warehouses.destroy');

Route::get('/inventories', [InventoriesController::class, 'index'])->name('inventories');
Route::post('/inventories/store', [InventoriesController::class, 'store'])->name('inventories.store');
Route::get('/inventories/edit/{id}', [InventoriesController::class, 'edit'])->name('inventories.edit');
Route::put('/inventories/update/{id}', [InventoriesController::class, 'update'])->name('inventories.update');
Route::delete('/inventories/delete/{id}', [InventoriesController::class, 'destory'])->name('inventories.destroy');


Route::get('/reviews', [RevivewController::class, 'index'])->name('reviews');












Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/products', [App\Http\Controllers\Api\ProductController::class, 'index'])->name('3');

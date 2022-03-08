<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', function () {
    return view('authentication.register');
});

Route::get('/customers',[CustomerController::class,'index'])->name('customers');
Route::get('/customers/create',[CustomerController::class,'create'])->name('customers-create');
Route::post('/customers',[CustomerController::class,'store'])->name('customers-store');
Route::get('/customers/{customer}/edit',[CustomerController::class,'edit'])->name('customers-edit');
Route::patch('/customers/{customer}',[CustomerController::class,'update'])->name('customers-update');
Route::get('/customers/{customer}/delete',[CustomerController::class,'delete'])->name('customers-delete');

Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/products/create',[ProductController::class,'create'])->name('product-create');
Route::post('/products',[ProductController::class,'store'])->name('product-store');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('product-edit');
Route::patch('/products/{product}',[ProductController::class,'update'])->name('product-update');
Route::get('/products/{product}/delete',[ProductController::class,'delete'])->name('product-delete');


Route::get('/variants',[VariantController::class,'index'])->name('variants');
Route::get('/variants/create',[VariantController::class,'create'])->name('variant-create');
Route::post('/variants',[VariantController::class,'store'])->name('variant-store');
Route::get('/variants/{variant}/edit',[VariantController::class,'edit'])->name('variant-edit');
Route::patch('/variants/{variant}',[VariantController::class,'update'])->name('variant-update');
Route::get('/variants/{variant}/delete',[VariantController::class,'delete'])->name('variant-delete');

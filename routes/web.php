<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\productcontroller;

Route::get('/', function () {
    return view('welcome');
});

// Kelompokkan rute dengan middleware 'web'
Route::middleware(['web'])->group(function () {
    // Rute untuk Customer
    // index, store, edit dari controller
    Route::get("/customer", [CustomerController::class, 'index'])->name('customer.index');
    Route::get("/customer/create", [CustomerController::class, 'create'])->name('customer.create');
    Route::post("/customer", [CustomerController::class, 'store'])->name('customer.store');
    // Route untuk menampilkan form edit
    Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    // Route untuk update data
    Route::put('/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');


    // Rute untuk Contact
    Route::get("/contact", [ContactController::class, 'addcontact'])->name('contact.addContact');
    Route::get("/contact/create", [ContactController::class, 'createcontact'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    // homeproduct, createproduct masuknya ke fungsi di controller
    // product.homeproduct, product.addproduct masuknya ke file view
    // store untuk action formnya, jadi bisa ditambah banyak
    Route::get('/product', [ProductController::class, 'homeproduct'])->name('product.homeproduct');
    Route::get('/product/add', [ProductController::class, 'createproduct'])->name('product.addproduct');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'updateProduct'])->name('product.update');
});

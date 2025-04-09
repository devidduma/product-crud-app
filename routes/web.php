<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Returns the homepage with all products
Route::get('/', ProductController::class .'@index')->name('product.index');
// Adds a product to the database
Route::post('/product', ProductController::class .'@store')->name('product.store');
// Returns a page that shows a full product
Route::get('/product/{id}', ProductController::class .'@show')->name('product.show');
// Updates a product
Route::put('/product/{id}', ProductController::class .'@update')->name('product.update');
// Deletes a product
Route::delete('/product/{id}', ProductController::class .'@destroy')->name('product.destroy');

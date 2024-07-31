<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProductController::class)
->prefix('products')
->name('products.')
->group(function() {
Route::get('', 'list')->name('list');
Route::get('/{product}', 'show')->name('view');
});

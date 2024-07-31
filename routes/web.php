<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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


Route::controller(ShopController::class)
    ->prefix('shops')
    ->name('shops.')
    ->group(function() {
        Route::get('', 'list')->name('list');
        Route::get('/{shopCode}', 'show')->name('view'); // Updated parameter
    });

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return redirect()->route('home.product');
});

Route::prefix('home')->group(function () {
    Route::get('/product', [HomeController::class, 'product'])->name('home.product');
    Route::get('/post', [HomeController::class, 'post'])->name('home.post');
});

// product resource controller
Route::resource('product', ProductController::class)->names([
    'index'  => 'product.list'
])->except('show');

// post resource controller
Route::resource('post', PostController::class)->scoped([
    'post' => 'slug'
]);

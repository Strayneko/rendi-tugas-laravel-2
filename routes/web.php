<?php

use App\Http\Controllers\HomeController;
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

// redirecting user when user accessing root page
Route::get('/', [HomeController::class, 'index'])->name('home');

// product resource controller
Route::resource('product', ProductController::class)->names([
    'create' => 'product.create',
    'index'  => 'product.list'
])->except('detail');

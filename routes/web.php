<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'doLogin'])->name('login.post');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
Route::post('/product/add-product', [PageController::class, 'productAdd'])->name('product.store');

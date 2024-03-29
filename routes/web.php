<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomepageController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/category', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->middleware('auth');
Route::post('/admin/category/create', [CategoryController::class, 'insert'])->middleware('auth');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->middleware('auth');
Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->middleware('auth');
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->middleware('auth');

Route::get('/admin/product', [ProductController::class, 'index'])->middleware('auth');
Route::get('/admin/product/create', [ProductController::class, 'create'])->middleware('auth');
Route::post('/admin/product/create', [ProductController::class, 'insert'])->middleware('auth');
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->middleware('auth');
Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->middleware('auth'); 

Route::get('/product', [HomepageController::class, 'productlist']);
Route::get('/category/{address}', [HomepageController::class, 'categoryDetail']);
Route::get('/detail-product/{id}', [HomepageController::class, 'productDetail']);
Route::get('/checkout/{id_product}', [HomepageController::class, 'checkoutDetail']);
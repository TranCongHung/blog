<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
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
// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function());

Route::get('/', [HomeController::class, 'index']);
Route::get('/product-detail/{productId}', [HomeController::class, 'productDetail'])->name('product.detail');

Route::get('/category/{id}', [HomeController::class, 'categoryDetail'])->name('category.detail');
Route::get('/product-search', [HomeController::class, 'productSearch'])->name('product.search');


/**
 * Admin
 */

Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('admin.dashboard');
//index
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/products', [productController::class, 'index'])->name('admin.products.index');
//create
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::get('/products/create', [productController::class, 'create'])->name('admin.products.create');
//store
    Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::post('/products', [productController::class, 'store'])->name('admin.products.store');
//show
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
    Route::get('/products/{id}', [productController::class, 'show'])->name('admin.products.show');
//edit
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::get('/products/{id}/edit', [productController::class, 'edit'])->name('admin.products.edit');
//update
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::put('/products/{id}', [productController::class, 'update'])->name('admin.products.update');
//delete  
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    Route::delete('/products/{id}', [productController::class, 'destroy'])->name('admin.products.destroy');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

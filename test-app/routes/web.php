<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/category', [\App\Http\Controllers\FrontendController::class, 'category'])->name('category');
Route::get('/products/{id}', [\App\Http\Controllers\FrontendController::class, 'products'])->name('products');
Route::get('/product-card/{id}', [\App\Http\Controllers\FrontendController::class, 'product'])->name('product');
Route::get('/collection', [\App\Http\Controllers\FrontendController::class, 'collection'])->name('collection');
Route::get('/cums/{id}', [\App\Http\Controllers\FrontendController::class, 'cums'])->name('cums');
Route::get('/cum-card/{id}', [\App\Http\Controllers\FrontendController::class, 'cum'])->name('cum');
Route::prefix('/post',)->group(function (){
    Route::get('/index', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::get('/edit/{post}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::get('/show/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
    Route::post('/store', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::put('/update/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');
});
Route::prefix('/category')->group(function (){
    Route::get('/index', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::get('/edit/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/show/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('category.show');
    Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
    Route::put('/update/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/delete/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('category.delete');
});
Route::prefix('/product')->group(function (){
    Route::get('/index', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('product.create');
    Route::get('/edit/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product.edit');
    Route::get('/show/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('product.show');
    Route::post('/store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('product.store');
    Route::put('/update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('product.delete');
});
Route::prefix('/collection')->group(function (){
    Route::get('/index', [\App\Http\Controllers\Admin\CollectionController::class, 'index'])->name('collection.index');
    Route::get('/create', [\App\Http\Controllers\Admin\CollectionController::class, 'create'])->name('collection.create');
    Route::get('/edit/{collection}', [\App\Http\Controllers\Admin\CollectionController::class, 'edit'])->name('collection.edit');
    Route::get('/show/{collection}', [\App\Http\Controllers\Admin\CollectionController::class, 'show'])->name('collection.show');
    Route::post('/store', [\App\Http\Controllers\Admin\CollectionController::class, 'store'])->name('collection.store');
    Route::put('/update/{collection}', [\App\Http\Controllers\Admin\CollectionController::class, 'update'])->name('collection.update');
    Route::delete('/delete/{collection}', [\App\Http\Controllers\Admin\CollectionController::class, 'destroy'])->name('collection.delete');
});
Route::prefix('/cum')->group(function (){
    Route::get('/index', [\App\Http\Controllers\Admin\CumController::class, 'index'])->name('cum.index');
    Route::get('/create', [\App\Http\Controllers\Admin\CumController::class, 'create'])->name('cum.create');
    Route::get('/edit/{cum}', [\App\Http\Controllers\Admin\CumController::class, 'edit'])->name('cum.edit');
    Route::get('/show/{cum}', [\App\Http\Controllers\Admin\CumController::class, 'show'])->name('cum.show');
    Route::post('/store', [\App\Http\Controllers\Admin\CumController::class, 'store'])->name('cum.store');
    Route::put('/update/{cum}', [\App\Http\Controllers\Admin\CumController::class, 'update'])->name('cum.update');
    Route::delete('/delete/{cum}', [\App\Http\Controllers\Admin\CumController::class, 'destroy'])->name('cum.delete');
});

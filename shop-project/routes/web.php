<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class,"index"]);
Route::get('/admin/products', [ProductController::class,"show"]);
Route::get('/admin/products/add', [ProductController::class,"add"]);
Route::post('/admin/products/create', [ProductController::class,"create"]);
Route::get('/admin/products/{id}/update', [ProductController::class,"update"]);
Route::put('/admin/products/{id}/edit', [ProductController::class,"edit"]);
Route::post('/admin/products/{id}/delete', [ProductController::class,"delete"]);
Route::get('/admin/products/{id}/remove', [ProductController::class,"remove"]);

Route::get('/admin/categories', [CategoryController::class,"show"]);
Route::get('/admin/categories/add', [CategoryController::class,"add"]);
Route::post('/admin/categories/create', [CategoryController::class,"create"]);
Route::post('/admin/categories/{id}/update', [CategoryController::class,"update"]);
Route::put('/admin/categories/{id}/edit', [CategoryController::class,"edit"]);
Route::post('/admin/categories/{id}/delete', [CategoryController::class,"delete"]);
Route::get('/admin/categories/{id}/remove', [CategoryController::class,"remove"]);



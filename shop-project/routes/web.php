<?php

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
Route::post('/admin/products/{id}/update', [ProductController::class,"update"]);
Route::put('/admin/products/{id}/edit', [ProductController::class,"edit"]);
Route::post('/admin/products/{id}/delete', [ProductController::class,"delete"]);
Route::get('/admin/products/{id}/remove', [ProductController::class,"remove"]);

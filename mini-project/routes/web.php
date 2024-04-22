<?php

use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\PatientController;
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

Route::get('/', [PatientController::class,"index"]);
Route::get('/admin/disease', [DiseaseController::class,"show"]);
Route::get('/admin/patient', [PatientController::class,"show"]);
Route::get('/admin/patient/add', [PatientController::class,"add"]);
Route::post('/admin/patient/create', [PatientController::class,"create"]);

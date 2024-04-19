<?php

use App\Models\Student;
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

Route::get('/', function () {
    $students=Student::all();
    return view('home',[
        "students"=>$students
    ]);
});
Route::get('/student/add', function () {
    return view('students.add');
});

Route::get('/student/create', function () {
    $firstname=request("firstname");
    $lastname=request("lastname");

    Student::create([
        "firstname"=>$firstname,
        "lastname"=>$lastname
    ]);
    return redirect("/");
});
Route::get('/student/{$id}/delete', function ($id) {
    Student::delete();
    return ;
});


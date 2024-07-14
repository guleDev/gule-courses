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

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/create', [CourseController::class, 'create']);
Route::get('/courses/{uniqueCode}', [CourseController::class, 'show']);
Route::post('/courses', [CourseController::class, 'store']);

Route::get('/reports', [UserController::class, 'index']);

/* Create a course search route */
Route::get('/', function () {
    return view('welcome');
});

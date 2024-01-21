<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/daftar',[authController::class,'registerForm']);
Route::post('/daftar',[authController::class,'register'])->name('daftar');


Route::get('/',[authController::class,'login']);
Route::post('/',[authController::class,'masuk']);
Route::get('/dashboard',[userController::class,'index'])->name('user.dashboard');
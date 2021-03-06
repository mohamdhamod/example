<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;


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


/* Register routes  */
Route::get('/register', [RegisterController::class , 'index'])->name('register');
Route::post('/register', [RegisterController::class , 'store'])->name('register');
Route::get('/edit-user', [LoginController::class , 'edit'])->name('edit_user');
Route::post('/update-user', [LoginController::class , 'update'])->name('update');

/* Login routes  */
Route::get('/login', [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class , 'store'])->name('login');
Route::post('/logout', [LogoutController::class , 'index'])->name('logout');




/* dashboard routes  */
Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard')->middleware('auth');

/* home routes  */
Route::get('/', function () {
    return view('home');
})->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\DashBoardController;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [UserController::class, 'loginSignUp'])->name('login_sign-up');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');





Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('restaurant', function () {
    return view('restaurant');
})->name('restaurant');

Route::get('rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('room-single', function () {
    return view('room-single');
})->name('room-single');

Route::get('blog-single', function(){
    return view('blog-single');
})->name('blog-single');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

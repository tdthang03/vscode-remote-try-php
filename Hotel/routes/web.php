<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CartController;
use App\Models\Category;

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
Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');
Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('detail');
Route::get('/', [UserController::class, 'loginSignUp'])->name('login_sign-up');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/logon',[AdminController::class,'logon'])->name('logon');
Route::post('/logon',[AdminController::class,'postLogon'])->name('admin.logon');
Route::get('/sign-out', [AdminController::class, 'signOut'])->name('admin.signout');

Route::post('/add-cart', [CartController::class, 'add'])->name('cart.add');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
    Route::resource('category', CategoryController::class);
    Route::get('/category-trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::get('/category/{id}/restore', [CategoryController::class, 'restore'])->name('category.restore');
    Route::get('/category/{id}/forceDelete', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');

    Route::resource('product', ProductController::class);
});


Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('restaurant', function () {
    return view('restaurant');
})->name('restaurant');

Route::get('blog-single', function(){
    return view('blog-single');
})->name('blog-single');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

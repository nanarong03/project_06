<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'promotepage.home')->name('home');
Route::view('/product', 'promotepage.product')->name('product');
Route::view('/teacher', 'promotepage.teacher')->name('teacher');
Route::view('/about', 'promotepage.about')->name('about');
Route::view('/contact', 'promotepage.contact')->name('contact');


// start admin
Auth::routes();



Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');
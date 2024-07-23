<?php

use App\Http\Controllers\ITProjectIndexController;
use Illuminate\Support\Facades\Auth;
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

// ITProject Website Route  For Laptop Size------------------------//
Route::get('/ITWeb', [ITProjectIndexController::class, 'Laptop']);



// ITProject Website Route For Mobile Size ------------------------//
Route::get('/', [ITProjectIndexController::class, 'ITindex']);
Route::get('/about',[ITProjectIndexController::class,  'aboutpage'])->name('aboutpage');
Route::get('/ScreenSize',[ITProjectIndexController::class,  'aboutpage'])->name('aboutpage');
Route::get('/contact',[ITProjectIndexController::class,  'contact'])->name('contact');
Route::get('/companyprofile',[ITProjectIndexController::class,  'companyprofile'])->name('companyprofile');


Route::get('/login', function () {
    return view('auth/login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



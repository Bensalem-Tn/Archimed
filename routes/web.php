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
///client side

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/how-it-work', function () {
    return view('how-it-work');
});
Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/architect/home', function () {
    return view('architect.index');
});
Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


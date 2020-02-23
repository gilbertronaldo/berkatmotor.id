<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/shop', function () {
    return view('pages.shop');
});

//Route::get('/coming-soon', function () {
//    return view('welcome');
//})->name('coming-soon');
//
//
//Route::get('{anyExceptRoot}', function() {
//    return redirect('coming-soon');
//})->where('anyExceptRoot', '[^/]*');

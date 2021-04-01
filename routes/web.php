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
Route::get('/', function (){
   return view('welcome');
});

Route::get('/first', function () {
    return view('firstpage');
})->name('firstpage');

Route::get('/second', function () {
    return view('secondpage');
})->name('secondpage');

Route::get('/third', function () {
    return view('thirdpage');
})->name('thirdpage');

Route::get('/fourth', function () {
    return view('fourthpage');
})->name('fourthpage');

Route::get('/fifth', function () {
    $hz = DB::table('hz')->get();
    return view('fifthpage', compact('hz'));
})->name('fifthpage');



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



Route::get('/', function () {
    
    return view('homepage');
});
Route::get('homepage/page1', function () {
    return view('page1');
});
Route::get('homepage/page2', function () {
    return view('page2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    return view('welcome');
})->name('index');

Route::get('/about',function(){
    return view('about');
})->name('aboutpage');

Route::get('/contact',function(){
    return view('contact');
})->name('contactpage');

Route::get('/blogs',function(){
    return view('blogs');
})->name('blogspage');

Route::get('/services',function(){
    return view('services');
})->name('servicespage');

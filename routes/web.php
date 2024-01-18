<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Homecontroller;
Use App\Http\Controllers\Authcontroller;
Use App\Http\Controllers\Admincontroller;

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

//Home/Static pages(Homecontroller)

Route::get('/',[Homecontroller::class,"index"])->name('index');
Route::get('/about',[Homecontroller::class,"about"])->name('aboutpage');
Route::get('/contact',[Homecontroller::class,"contact"])->name('contactpage');
Route::get('/blogs',[Homecontroller::class,"blogs"])->name('blogspage');
Route::get('/services',[Homecontroller::class,"services"])->name('servicespage');

//CREATE 
Route::get("/admin/createblog",[Admincontroller::class,"createblog"])->name("createblog");
Route::get("/admin/createservice",[Admincontroller::class,"createservice"])->name("createservice");


Route::post("/message",[Homecontroller::class,"createmessage"])->name("createmessage");
Route::post("/admin/addservice",[Admincontroller::class,"addservice"])->name("addservice");
Route::post("/admin/addblog",[Admincontroller::class,"addblog"])->name("addblog");

//Authpages(Authcontroller)
Route::get('/login',[Authcontroller::class,"login"])->name('loginpage');
Route::post('/login',[Authcontroller::class,"signin"]);
Route::get('/signup',[Authcontroller::class,"signup"])->name('signuppage');
Route::post('/signup',[Authcontroller::class,"register"]);
Route::post('/logout',[Authcontroller::class,"logout"])->name('logout');

//Adminpages(Admincontroller)
Route::get('/admin',[Admincontroller::class,"index"])->name('admin-index');
Route::get('/admin/services',[Admincontroller::class,"services"])->name('admin-services');
Route::get('/admin/messages',[Admincontroller::class,"messages"])->name('admin-messages');
Route::get('/admin/users',[Admincontroller::class,"users"])->name('admin-users');
Route::get('/admin/blogs',[Admincontroller::class,"blogs"])->name('admin-blogs');


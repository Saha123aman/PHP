<?php

use App\Http\Controllers\registercontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Projects;

Route::get('/', function () {
    return view('registration');
});
Route::post('/register',[registercontroller::class,'register'])->name('register');


Route::get('/login',[registercontroller::class,'login'])->name('login');
Route::post('/loginuser',[registercontroller::class,'loginuser'])->name('userlogin');
Route::get('/interface',[registercontroller::class,'interface']);
Route::get('/logout',[registercontroller::class,'logout']);

Route::get('/show',[registercontroller::class,'show'])->name('display');
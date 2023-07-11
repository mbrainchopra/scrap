<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Addproducts;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login/{i}',function($i){
    if($i==1){
        return view('auth.login');
    }
    if($i==2){
        return view('auth.logind');
    }
});
Route::get('register/{i}',function($i){
    if($i==1){
        return view('auth.register');
    }
    if($i==2){
        return view('auth.registerd');
    }
});

Route::view('addpro','productsadd');

Route::post('addprodb',[Addproducts::class,'addproduct']);


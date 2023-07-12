<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Addproducts;
use App\Http\Controllers\Viewproducts;
use App\Models\product;
use App\Http\Controllers\HomeController2;

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
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/homeus', [HomeController2::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/login/{i}',function($i){
    if($i==1){
        return view('auth.login');
    }
    if($i==2){
        return view('auth.logind');
    }
});
Route::view('homeback','home');
Route::get('register/{i}',function($i){
    if($i==1){
        return view('auth.register');
    }
    if($i==2){
        return view('auth.registerd');
    }
});

Route::view('addpro','productsadd');
Route::get('viewproduct',[Viewproducts::class,'getpro']);


Route::put('products.update/{id}', function ($id, Request $request) {
    $product = product::find($id);

    if (!$product) {
        // Handle the case where the product is not found
        return redirect()->back()->with('error', 'Product not found.');
    }

    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->unit = $request->input('unit');
    $product->description = $request->input('description');

    $product->save();

    return redirect()->back()->with('success', 'Product updated successfully.');
});

Route::delete('products/{id}', function ($id) {
    $product = product::find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully.');
})->name('products.destroy');
Route::post('addprodb',[Addproducts::class,'addproduct']);


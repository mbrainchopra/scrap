<?php

namespace App\Http\Controllers;
use app\Models\product;
use Illuminate\Http\Request;

class Addproducts extends Controller
{
   public function addproduct(Request $pro){
     $products=$pro->validate([
        'name'=>'required',
        'price'=>'required',
        'description'=>'required',
        'unit'=>'required'
     ]);

     $newproduct = product::create($products);
     return redirect(route('productsadd'));

   }
}

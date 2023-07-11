<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Addproducts extends Controller
{
    public function addproduct(Request $pro)
    {
         $name = $pro->input('name');
        $price = $pro->input('price');
        $description = $pro->input('description');
        $unit = $pro->input('unit');



        $user = Auth::user();
        $email = $user->email;

        $newproduct = product::create([
            'name' => $name,
            'price' => $price,
            'unit' => $unit,
            'description' => $description,
            'email' => $email,
        ]);

        return redirect('addpro');
       /*  $user = Auth::user();
        $email = $user->email;
        return $email; */
    }
}

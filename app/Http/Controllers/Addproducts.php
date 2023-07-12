<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AddProducts extends Controller
{
    public function addProduct(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $unit = $request->input('unit');

        $user = Auth::user();
        $email = $user->email;

        $newProduct = Product::create([
            'name' => $name,
            'price' => $price,
            'unit' => $unit,
            'description' => $description,
            'email' => $email,
        ]);

        return redirect('addpro')->with('success', 'Succesfully Added');

        // Alternatively, you can return the email as well
        // return redirect('addpro')->with('success', 'Product added successfully.')->with('email', $email);
    }
}

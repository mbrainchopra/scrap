<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\product;
class Viewproducts extends Controller
{public function getpro()
    {
        $user = Auth::user();
        $email = $user->email;
        $products = Product::where('email', $email)->get();
        return view('viewproducsts', compact('products'));
    }
    public function update(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product) {

            return redirect()->back()->with('error', 'Product not found.');
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->unit = $request->input('unit');
        $product->description = $request->input('description');

        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully.');
    }


public function destroy($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully.');
}



}

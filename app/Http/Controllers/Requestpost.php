<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class Requestpost extends Controller
{
    public function store(Request $request)
    {




        $locationRequest = Message::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
            'payment_mode' => $request->input('payment_mode'),
            'district' => $request->input('district'),
            'product_type' => $request->input('product_type'),
            'quantity' => $request->input('quantity'),
            'unit' => $request->input('unit'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),

        ]);

   return "Success";
/*
        return view('homeuser');
 */


    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\accept;
class Myorders extends Controller
{
    public function showorder(){
        $userEmail = Auth::user()->email;
        $accepts = accept::where('demail', $userEmail)->get();

        return view('Myorders', compact('accepts'));
    }
    public function updateStatus($id, Request $request)
    {
        $accept = accept::findOrFail($id);
        $accept->status = $request->input('status');
        $accept->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

}






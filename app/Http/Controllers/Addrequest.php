<?php

namespace App\Http\Controllers;
use App\Models\accept;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class Addrequest extends Controller
{
    public function addrequest($request)
    {
        $datas = Message::find($request);
        if ($datas) {
            $acc = new accept();
            $acc->name = $datas->name;
            $acc->address = $datas->address;
            $acc->contact = $datas->contact;
            $acc->product_type = $datas->product_type;
            $acc->quantity = $datas->quantity;
            $acc->lang = $datas->lang;
            $acc->lang = $datas->longitude;
            $acc->latt = $datas->latitude;
            $acc->status = 1;
            $acc->price = 0;
            $acc->pstatus = 0;
            $acc->demail = Auth::user()->email;
            $acc->save();

            $msg = $datas->name;

            // Remove the data from the Message model
            $datas->delete();

            return redirect()->back()->with('message', $msg.'`s Order Accepted. Please visit the Orders page to get more information');
        }
    }
}


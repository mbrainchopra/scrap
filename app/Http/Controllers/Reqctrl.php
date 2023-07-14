<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class Reqctrl extends Controller
{
    public function filterreq(Request $rq)
    {
        $dist = $rq->input('district');
        $datareq = Message::where('district', $dist)->get();

        return view('viewrequessts', compact('datareq'));

    }
}

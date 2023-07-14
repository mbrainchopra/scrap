<?php

namespace App\Http\Controllers;
use App\Models\accept;
use App\Models\Message;
use Illuminate\Http\Request;

class Acceptrewuest extends Controller
{
    public function addrequest(Request $rqes){
        $id = $rqes->input('id');
        $message = Message::find($id);
        return $message;

    }
}

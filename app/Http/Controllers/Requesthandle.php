<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class Requesthandle extends Controller
{
    public function getreq(){

        return view('viewrequessts');
    }



}

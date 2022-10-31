<?php

namespace App\Http\Controllers\Userclient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientendController extends Controller
{
    public function landing(){
        return view('auth/landingpage');
    }
}

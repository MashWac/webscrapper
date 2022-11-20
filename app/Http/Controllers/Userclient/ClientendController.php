<?php

namespace App\Http\Controllers\Userclient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDO;

class ClientendController extends Controller
{
    public function landing(){
        return view('auth/landingpage');
    }
    public function productlist(){
        return view("clientend.productlist");
    }
    public function productpage(){
        return view("clientend.productpage");
    }
}

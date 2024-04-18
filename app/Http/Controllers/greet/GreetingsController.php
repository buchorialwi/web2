<?php

namespace App\Http\Controllers\greet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    public function greet($name,$npm) {
        return view("selamat_datang")->with(["nama","npm"],$name,$npm);
    }
}

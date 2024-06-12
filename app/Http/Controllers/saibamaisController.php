<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saibamaisController extends Controller
{
    public function index(){
        return view("home.saibamais");
    }
}

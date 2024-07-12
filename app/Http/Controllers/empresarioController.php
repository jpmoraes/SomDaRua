<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empresarioController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function pageCadastro(){
        return view('admin.usuarioCad');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RedeSocial;
use Illuminate\Http\Request;

class rede_socialController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $url = $data["url"];

        $rede_social = new RedeSocial();
        $rede_social->url = $url;


        $rede_social->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showRedeSocial = RedeSocial::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateRedeSocial = RedeSocial::findOrFail($id);

        $updateRedeSocial->url = $request->novo_url;

        $updateRedeSocial->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteRedeSocial = RedeSocial::findOrFail($id);
        $deleteRedeSocial->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

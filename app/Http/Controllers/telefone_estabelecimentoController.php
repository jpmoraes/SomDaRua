<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TelefoneEstabelecimento;
use Illuminate\Http\Request;

class telefone_estabelecimentoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $telefone = $data["telefone"];

        $telefone_estabelecimento = new TelefoneEstabelecimento();
        $telefone_estabelecimento->telefone = $telefone;

        $telefone_estabelecimento->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showTelefoneEstabelecimento = TelefoneEstabelecimento::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateTelefoneEstabelecimento = TelefoneEstabelecimento::findOrFail($id);
        
        $updateTelefoneEstabelecimento->telefone = $request->novo_telefone;;

        $updateTelefoneEstabelecimento->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteTelefoneEstabelecimento = TelefoneEstabelecimento::findOrFail($id);
        $deleteTelefoneEstabelecimento->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

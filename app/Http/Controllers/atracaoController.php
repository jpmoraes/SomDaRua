<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Atracao;
use Illuminate\Http\Request;

class atracaoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $nome = $data["nome"];

        $atracao = new Atracao();
        $atracao->nome = $nome;


        $atracao->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showAtracao = Atracao::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateAtracao = Atracao::findOrFail($id);

        $updateAtracao->nome = $request->novo_nome;

        $updateAtracao->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteAtracao = Atracao::findOrFail($id);
        $deleteAtracao->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class eventoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $nome = $data["nome"];
        $data = $data["data"];
        $hora = $data["hora"];
        $valor_couvert = $data["valor_couvert"];
        $descricao = $data["descricao"];
        

        $evento = new Evento();
        $evento->nome = $nome;
        $evento->data = $data;
        $evento->hora = $hora;
        $evento->valor_couvert = $valor_couvert;
        $evento->descricao = $descricao;

        $evento->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showEvento = Evento::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateEvento = Evento::findOrFail($id);

        $updateEvento->nome = $request->novo_nome;
        $updateEvento->data = $request->novo_data;
        $updateEvento->hora = $request->novo_hora;
        $updateEvento->valor_couvert = $request->novo_valor_couvert;
        $updateEvento->descricao = $request->novo_descricao;

        $updateEvento->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteEvento = Evento::findOrFail($id);
        $deleteEvento->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

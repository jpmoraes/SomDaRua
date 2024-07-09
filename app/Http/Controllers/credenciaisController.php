<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empresario;
use Illuminate\Http\Request;

class credenciaisController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $nome = $data["nome"];
        $data_cadastro = $data["data_cadastro"];
        $credenciais_id = $data["credenciais_id"];

        $empresario = new Empresario();
        $empresario->nome = $nome;
        $empresario->data_cadastro = $data_cadastro;


        $empresario->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showEmpresario = Empresario::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateEmpresario = Empresario::findOrFail($id);

        $updateEmpresario->nome = $request->novo_nome;
        $updateEmpresario->data_cadastro = $request->novo_data_cadastro;

        $updateEmpresario->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteEmpresario = Empresario::findOrFail($id);
        $deleteEmpresario->delete();

        return redirect('/'); //TODO ajustar retorno
    }
    

}
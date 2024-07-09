<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EnderecoEmpresario;
use Illuminate\Http\Request;

class endereco_EnderecoEmpresarioController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $rua = $data["rua"];
        $bairro = $data["bairro"];
        $complemento = $data["complemento"];
        $cep = $data["cep"];
        $numero = $data["numero"];
        

        $endereco_empresario = new EnderecoEmpresario();
        $endereco_empresario->rua = $rua;
        $endereco_empresario->bairro = $bairro;
        $endereco_empresario->complemento = $complemento;
        $endereco_empresario->cep = $cep;
        $numero->numero = $numero;


        $endereco_empresario->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showEnderecoEmpresario = EnderecoEmpresario::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateEnderecoEmpresario = EnderecoEmpresario::findOrFail($id);

        $updateEnderecoEmpresario->rua = $request->novo_rua;
        $updateEnderecoEmpresario->bairro = $request->novo_bairro;
        $updateEnderecoEmpresario->complemento = $request->novo_complemento;
        $updateEnderecoEmpresario->cep = $request->novo_cep;
        $updateEnderecoEmpresario->numero = $request->novo_numero;

        $updateEnderecoEmpresario->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteEnderecoEmpresario = EnderecoEmpresario::findOrFail($id);
        $deleteEnderecoEmpresario->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

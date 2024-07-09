<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EnderecoEstabelecimento;
use Illuminate\Http\Request;

class endereco_estabelecimentoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $rua = $data["rua"];
        $bairro = $data["bairro"];
        $complemento = $data["complemento"];
        $cep = $data["cep"];
        $numero = $data["numero"];
        

        $endereco_estabelecimento = new EnderecoEstabelecimento();
        $endereco_estabelecimento->rua = $rua;
        $endereco_estabelecimento->bairro = $bairro;
        $endereco_estabelecimento->complemento = $complemento;
        $endereco_estabelecimento->cep = $cep;
        $numero->numero = $numero;


        $endereco_estabelecimento->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showEnderecoEstabelecimento = EnderecoEstabelecimento::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateEnderecoEstabelecimento = EnderecoEstabelecimento::findOrFail($id);

        $updateEnderecoEstabelecimento->rua = $request->novo_rua;
        $updateEnderecoEstabelecimento->bairro = $request->novo_bairro;
        $updateEnderecoEstabelecimento->complemento = $request->novo_complemento;
        $updateEnderecoEstabelecimento->cep = $request->novo_cep;
        $updateEnderecoEstabelecimento->numero = $request->novo_numero;

        $updateEnderecoEstabelecimento->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteEnderecoEstabelecimento = EnderecoEstabelecimento::findOrFail($id);
        $deleteEnderecoEstabelecimento->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

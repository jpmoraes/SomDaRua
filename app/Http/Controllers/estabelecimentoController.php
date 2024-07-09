<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estabelecimento;
use Illuminate\Http\Request;

class estabelecimentoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $nome = $data["nome"];
        $cpf_cnpj = $data["cpf_cnpj"];

        $estabelecimento = new Estabelecimento();
        $estabelecimento->nome = $nome;
        $estabelecimento->cpf_cnpj = $cpf_cnpj;

        $estabelecimento->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showEstabelecimento = Estabelecimento::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateEstabelecimento = Estabelecimento::findOrFail($id);

        $updateEstabelecimento->nome = $request->novo_nome;
        $updateEstabelecimento->cpf_cnpj = $request->novo_cpf_cnpj;

        $updateEstabelecimento->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteEstabelecimento = Estabelecimento::findOrFail($id);
        $deleteEstabelecimento->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

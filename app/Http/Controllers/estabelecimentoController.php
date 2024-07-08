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

        $id_estabelecimento = $data["id_estabelecimento"];
        $nome = $data["nome"];
        $cpf_cnpj = $data["cpf_cnpj"];
        // $empresario_cpf = $data["empresario_cpf"];

        $estabelecimento = new Estabelecimento();
        $estabelecimento->id_estabelecimento = $id_estabelecimento;
        $estabelecimento->nome = $nome;
        $estabelecimento->cpf_cnpj = $cpf_cnpj;
        // $empresario->empresario_cpf = $empresario_cpf;

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

        $updateEstabelecimento->id_estabelecimento = $request->novo_id_estabelecimento;
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

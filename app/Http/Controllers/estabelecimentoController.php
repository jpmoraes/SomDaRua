<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EnderecoEstabelecimento;
use App\Models\Estabelecimento;
use App\Models\RedeSocial;
use App\Models\TelefoneEstabelecimento;
use App\Models\Secao;
use App\Models\Empresario;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class estabelecimentoController extends Controller
{

    public function create() {
        return view('admin.formEstabelecimento');
    }

    public function store(Request $request)
    {
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];
        $cpf =  Empresario::where('credenciais_id', $idCredencial)->get('cpf')[0]['cpf'];
       
        $data = $request->all();

        $estabelecimento = new Estabelecimento();
        $estabelecimento->nome = $data["nome"];
        $estabelecimento->cpf_cnpj = $data["cpf_cnpj"];
        $estabelecimento->empresario_cpf = $data['cpfEmpresario'];
        $estabelecimento->empresario_cpf = $cpf;
        $estabelecimento->save();

        $estabelecimento_id = Estabelecimento::orderBy('id_estabelecimento', 'desc')->first()->id_estabelecimento;

        $enderecoEstabelecimento = new EnderecoEstabelecimento();
        $enderecoEstabelecimento->rua = $data["rua"];
        $enderecoEstabelecimento->bairro = $data["bairro"];
        $enderecoEstabelecimento->complemento = $data["complemento"];
        $enderecoEstabelecimento->cep = $data["cep"];
        $enderecoEstabelecimento->numero = $data["numero"];
        $enderecoEstabelecimento->estabelecimento_id = $estabelecimento_id;
        $enderecoEstabelecimento->save();

        $telefoneEstabelecimento = new TelefoneEstabelecimento();
        $telefoneEstabelecimento->telefone = $data["telefone"];
        $telefoneEstabelecimento->estabelecimento_id = $estabelecimento_id;
        $telefoneEstabelecimento->save();

        $redeSocial = new RedeSocial();
        $redeSocial->url = $data['url'];
        $redeSocial->estabelecimento_id = $estabelecimento_id;
        $redeSocial->tipo_rede_id = $data['tipoRede'];
        $redeSocial->save();

        return redirect("/admin/estabelecimento/show"); 
    }
    public function show(Request $request)
    {
        $showEstabelecimento = Estabelecimento::orderBy('id_estabelecimento', 'asc')->get();

        return view('admin.showEstabeleciomento')->with('showEstabelecimento', $showEstabelecimento);
    }
    public function update(Request $request, $id)
    {
        $updateEstabelecimento = Estabelecimento::findOrFail($id);

        $updateEstabelecimento->nome = $request->novo_nome;
        $updateEstabelecimento->cpf_cnpj = $request->novo_cpf_cnpj;

        $updateEstabelecimento->save();

        return redirect("/admin/estabelecimento/show");
    }
    public function delete(Request $request, $id)
    {

        $deleteEstabelecimento = Estabelecimento::findOrFail($id);
        $deleteEstabelecimento->delete();

        return redirect('/admin/estabelecimento/show');
    }
}

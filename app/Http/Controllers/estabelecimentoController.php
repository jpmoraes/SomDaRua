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
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];
        $cpf =  Empresario::where('credenciais_id', $idCredencial)->get('cpf')[0]['cpf'];

        $estabelecimentoArray = Estabelecimento::where('empresario_cpf', $cpf)
                                            ->join('endereco_estabelecimento', 'estabelecimento.id_estabelecimento', '=', 'endereco_estabelecimento.estabelecimento_id')
                                            ->join('telefone_estabelecimento', 'estabelecimento.id_estabelecimento', '=', 'telefone_estabelecimento.estabelecimento_id')
                                            ->join('rede_social', 'estabelecimento.id_estabelecimento', '=', 'rede_social.estabelecimento_id')
                                            ->join('tipo_rede', 'rede_social.tipo_rede_id', '=', 'tipo_rede.id_tipo_rede')
                                            ->orderBy('id_estabelecimento', 'asc')->get(['id_estabelecimento', 'nome', 'rua', 'bairro', 'complemento', 'cep', 'numero', 'telefone', 'url', 'tipo_rede.tipo']);

        $estabelecimentoArray = json_decode(json_encode($estabelecimentoArray), true);

        $i = 0;
        foreach($estabelecimentoArray as $estabelecimento){
            $estabelecimento['endereco'] = $estabelecimento['rua'].', '.$estabelecimento['numero'].', '.$estabelecimento['bairro'].', '.$estabelecimento['complemento'].', '.$estabelecimento['cep'];
            unset($estabelecimento['rua'], $estabelecimento['numero'], $estabelecimento['bairro'], $estabelecimento['complemento'],$estabelecimento['cep']);
            $estabelecimentoArray[$i] = $estabelecimento;
            $i++;
        }

        return view('admin.showEstabeleciomento')
                ->with('estabelecimentoArray', $estabelecimentoArray);
    }

    public function delete($id) {
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->delete();
        return redirect()->route('estabelecimento.show');
    }

    public function update(Request $request, $id)
    {
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];
        $cpf =  Empresario::where('credenciais_id', $idCredencial)->get('cpf')[0]['cpf'];

        $data = $request->all();  

        $estabelecimento = Estabelecimento::findOrFail($id);
        $estabelecimento->nome = $data["nome"];
        $estabelecimento->cpf_cnpj = $data["cpf_cnpj"];
        $estabelecimento->empresario_cpf = $cpf;
        $estabelecimento->update();

        $enderecoEstabelecimento = EnderecoEstabelecimento::where('estabelecimento_id', $id)->first();
        $enderecoEstabelecimento->rua = $data["rua"];
        $enderecoEstabelecimento->bairro = $data["bairro"];
        $enderecoEstabelecimento->complemento = $data["complemento"];
        $enderecoEstabelecimento->cep = $data["cep"];
        $enderecoEstabelecimento->numero = $data["numero"];
        $enderecoEstabelecimento->estabelecimento_id = $id;
        $enderecoEstabelecimento->update();

        $telefoneEstabelecimento = TelefoneEstabelecimento::where('estabelecimento_id', $id)->first();
        $telefoneEstabelecimento->telefone = $data["telefone"];
        $telefoneEstabelecimento->estabelecimento_id = $id;
        $telefoneEstabelecimento->update();

        $redeSocial = RedeSocial::where('estabelecimento_id', $id)->first();
        $redeSocial->url = $data['url'];
        $redeSocial->estabelecimento_id = $id;
        $redeSocial->tipo_rede_id = $data['tipoRede'];
        $redeSocial->update();

        return redirect()->route('estabelecimento.show');
    }
}
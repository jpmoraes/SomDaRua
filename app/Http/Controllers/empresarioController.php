<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmailEmpresario;
use App\Models\Empresario;
use App\Models\EnderecoEmpresario;
use App\Models\RedeSocial;
use App\Models\Secao;
use App\Models\TelefoneEmpresario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class empresarioController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
    public function create()
    {
        // Obter o CPF do Empresário a partir da sessão do usuário
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];

        $cpfEmpresario = Empresario::where('credenciais_id', $idCredencial)->get('cpf');
        $cpfEmpresarioArray = json_decode(json_encode($cpfEmpresario), true);

        if ($cpfEmpresarioArray != []) {
            return redirect()->route("empresario.edit");
        }

        return view('admin.formEmpresario');
    }

    public function store(Request $request)
    {
        // Obter o CPF do Empresário a partir da sessão do usuário
        $idSessao = Session::getId();

        $idCredencial = Secao::findOrFail($idSessao)->first('user_id');
        $idCredencial = json_decode(json_encode($idCredencial), true)['user_id'];

        $data = $request->all();
        $cpf = $data["cpf"];

        $empresario = new Empresario();
        $empresario->cpf = $cpf;
        $empresario->nome = $data["nome"];
        $empresario->credenciais_id = $idCredencial;
        $empresario->save();

        $endereco_empresario = new EnderecoEmpresario();
        $endereco_empresario->rua = $data["rua"];
        $endereco_empresario->bairro = $data["bairro"];
        $endereco_empresario->complemento = $data["complemento"];
        $endereco_empresario->cep = $data["cep"];
        $endereco_empresario->numero = $data["numero"];
        $endereco_empresario->empresario_cpf = $cpf;
        $endereco_empresario->save();

        $telefone_empresario = new TelefoneEmpresario();
        $telefone_empresario->telefone = $data["telefone"];
        $telefone_empresario->empresario_cpf = $cpf;
        $telefone_empresario->save();

        $email_empresario = new EmailEmpresario();
        $email_empresario->email = $data["email"];
        $email_empresario->empresario_cpf = $cpf;
        $email_empresario->save();

        return redirect("dashboard"); //TODO ajustar retorno
    }

    public function show(Request $request)
    {
        $showEmpresario = Empresario::orderBy('id', 'asc')->get();
        $showEnderecoEmpresario = EnderecoEmpresario::orderBy('id', 'asc')->get();
        $showTelefoneEmpresario = TelefoneEmpresario::orderBy('id', 'asc')->get();
        $showRedeSocial = RedeSocial::orderBy('id', 'asc')->get();
        $showEmailEmpresario = EmailEmpresario::orderBy('id', 'asc')->get();

        return view("admin.show")->with('data', [
            'showEmpresario' => $showEmpresario,
            'showEnderecoEmpresario' => $showEnderecoEmpresario,
            'showTelefoneEmpresario' => $showTelefoneEmpresario,
            'showRedeSocial' => $showRedeSocial,
            'showEmailEmpresario' => $showEmailEmpresario,
        ]);
    }

    public function edit(Request $request)
    {
        // Obter o CPF do Empresário a partir da sessão do usuário
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];
        $cpf = Empresario::where('credenciais_id', $idCredencial)->get('cpf')[0]['cpf'];

        // Join para obter todos os dados do empresario
        $empresarioArray = Empresario::where('cpf', $cpf)
            ->join('endereco_empresario', 'empresario.cpf', '=', 'endereco_empresario.empresario_cpf')
            ->join('telefone_empresario', 'empresario.cpf', '=', 'telefone_empresario.empresario_cpf')
            ->join('email_empresario', 'empresario.cpf', '=', 'email_empresario.empresario_cpf')
            ->orderBy('cpf', 'asc')->get(['cpf', 'nome', 'rua', 'bairro', 'complemento', 'cep', 'numero', 'telefone', 'email']);

        $empresarioArray = json_decode(json_encode($empresarioArray), true);

        return view('admin.editEmpresario')
            ->with('empresarioArray', $empresarioArray);

    }

    public function update(Request $request)
    {
        // Obter o CPF do Empresário a partir da sessão do usuário
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];
        $cpf = Empresario::where('credenciais_id', $idCredencial)->first()->cpf;


        // Atualizar Empresario
        $updateEmpresario = Empresario::where('cpf', $cpf)->first();
        $updateEmpresario->nome = $request->novo_nome;
        $updateEmpresario->save();

        // Atualizar EnderecoEmpresario
        $updateEnderecoEmpresario = EnderecoEmpresario::where('empresario_cpf', $cpf)->first();
        $updateEnderecoEmpresario->rua = $request->novo_rua;
        $updateEnderecoEmpresario->bairro = $request->novo_bairro;
        $updateEnderecoEmpresario->complemento = $request->novo_complemento;
        $updateEnderecoEmpresario->cep = $request->novo_cep;
        $updateEnderecoEmpresario->numero = $request->novo_numero;
        $updateEnderecoEmpresario->save();

        // Atualizar TelefoneEmpresario
        $updateTelefoneEmpresario = TelefoneEmpresario::where('empresario_cpf', $cpf)->first();
        $updateTelefoneEmpresario->telefone = $request->novo_telefone;
        $updateTelefoneEmpresario->save();

        // Atualizar EmailEmpresario
        $updateEmailEmpresario = EmailEmpresario::where('empresario_cpf', $cpf)->first();
        $updateEmailEmpresario->email = $request->novo_email;
        $updateEmailEmpresario->save();

        // Redirecionar para a página de dashboard
        return redirect("/dashboard");
    }



}

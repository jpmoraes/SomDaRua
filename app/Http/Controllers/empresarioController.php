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

    public function index(){
        return view('admin.index');
    }
    public function create(){
        return view('admin.formEmpresario');
    }

    public function store(Request $request)
    {
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];

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
            'showEmpresario'=> $showEmpresario,
            'showEnderecoEmpresario'=> $showEnderecoEmpresario,
            'showTelefoneEmpresario'=> $showTelefoneEmpresario,
            'showRedeSocial'=> $showRedeSocial,
            'showEmailEmpresario'=> $showEmailEmpresario,
        ]);
    }
    public function update(Request $request, $id)
    {
        $updateEmpresario = Empresario::where('cpf', $id)->get(); //TODO modificar 

        $updateEmpresario->cpf = $request->novo_cpf;
        $updateEmpresario->nome = $request->novo_nome;

        $updateEmpresario->save();

        $updateEnderecoEmpresario = EnderecoEmpresario::findOrFail($id); //TODO modificar

        $updateEnderecoEmpresario->rua = $request->novo_rua;
        $updateEnderecoEmpresario->bairro = $request->novo_bairro;
        $updateEnderecoEmpresario->complemento = $request->novo_complemento;
        $updateEnderecoEmpresario->cep = $request->novo_cep;
        $updateEnderecoEmpresario->numero = $request->novo_numero;

        $updateEnderecoEmpresario->save();

        $updateTelefoneEmpresario = TelefoneEmpresario::findOrFail($id); //TODO modificar

        $updateTelefoneEmpresario->telefone = $request->novo_telefone;

        $updateTelefoneEmpresario->save();

        $updateRedeSocial = RedeSocial::findOrFail($id); //TODO modificar

        $updateRedeSocial->url = $request->novo_url;

        $updateEmpresario->email = $request->novo_email;


        return redirect("/dashboard");
    }


}

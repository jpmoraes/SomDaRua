<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmailEmpresario;
use App\Models\Empresario;
use App\Models\EnderecoEmpresario;
use App\Models\RedeSocial;
use App\Models\TelefoneEmpresario;
use Illuminate\Http\Request;

class empresarioController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $cpf = $data["cpf"];
        $nome = $data["nome"];
        $rua = $data["rua"];
        $bairro = $data["bairro"];
        $complemento = $data["complemento"];
        $cep = $data["cep"];
        $numero = $data["numero"];
        $telefone = $data["telefone"]; 
        $url = $data["url"];
        $email = $data["email"];

    
        $empresario = new Empresario();

        $empresario->cpf = $cpf;
        $empresario->nome = $nome;

        $endereco_empresario = new EnderecoEmpresario();
        $endereco_empresario->rua = $rua;
        $endereco_empresario->bairro = $bairro; 
        $endereco_empresario->complemento = $complemento;
        $endereco_empresario->cep = $cep;    
        $endereco_empresario->numero = $numero;


        $telefone_empresario = new TelefoneEmpresario();
        $telefone_empresario->telefone = $telefone;

        $rede_social = new RedeSocial();

        $rede_social->url = $url;


        $email_empresario = new EmailEmpresario();
        
        $email_empresario->email = $email;



        $empresario->save();
        
        return view("admin.index")->with('data', $data);
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
        ]); //TODO botar view de dados de admin
    }
    public function update(Request $request, $id)
    {
        $updateEmpresario = Empresario::findOrFail($id);

        $updateEmpresario->cpf = $request->novo_cpf;
        $updateEmpresario->nome = $request->novo_nome;


        $updateEnderecoEmpresario = EnderecoEmpresario::findOrFail($id);

        $updateEnderecoEmpresario->rua = $request->novo_rua;
        $updateEnderecoEmpresario->bairro = $request->novo_bairro;
        $updateEnderecoEmpresario->complemento = $request->novo_complemento;
        $updateEnderecoEmpresario->cep = $request->novo_cep;
        $updateEnderecoEmpresario->numero = $request->novo_numero;


        $updateTelefoneEmpresario = TelefoneEmpresario::findOrFail($id);

        $updateTelefoneEmpresario->telefone = $request->novo_telefone;


        $updateRedeSocial = RedeSocial::findOrFail($id);

        $updateRedeSocial->url = $request->novo_url;

        $updateEmpresario->email = $request->novo_email;


        $updateEmpresario->save();

        return redirect("/dashboard");
    }
}
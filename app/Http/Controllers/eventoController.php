<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Atracao;
use App\Models\Avaliacao;
use App\Models\Empresario;
use App\Models\Evento;
use App\Models\GeneroEvento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class eventoController extends Controller
{

    public function create(){
        return view('admin.formEvento');
    }

    public function store(Request $request)
    {
        $data = $request->all();        

        $evento = new Evento();
        $evento->nome = $data['nome'];
        $evento->data = $data['data'];
        $evento->hora = $data['hora'];
        $evento->valor_couvert = $data['valor_couvert'];
        $evento->descricao = $data['descricao'];
        $evento->estabelecimento_id = $data['estabelecimento_id'];
        $evento->save();

        $evento_id = Evento::orderBy('id_evento', 'desc')->first()->id_evento;

        $generoEvento = new GeneroEvento();
        $generoEvento->evento_id = $evento_id;
        $generoEvento->genero_id = $data['genero_id'];
        $generoEvento->save();

        $atracao = new Atracao();
        $atracao->nome = $data['atracao'];
        $atracao->evento_id = $evento_id;
        $atracao->save();

        //Criação do link de avaliação
        $url = env('APP_URL', 'http://localhost');
        $link = $url . '/avaliacao/' . $evento_id;

        $avaliacao = new Avaliacao();
        $avaliacao->link_avaliacao = $link;
        $avaliacao->evento_id = $evento_id;
        $avaliacao->save();

        return redirect("dashboard");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showEvento = Evento::orderBy('id', 'asc')->get();

        $showAtracao = Atracao::orderBy('id', 'asc')->get();

        return view("admin.index");
    }
    public function update(Request $request, $id)
    {
        $updateEvento = Evento::findOrFail($id); //TODO modificar

        $updateEvento->nome = $request->novo_nome;
        $updateEvento->data = $request->novo_data;
        $updateEvento->hora = $request->novo_hora;
        $updateEvento->valor_couvert = $request->novo_valor_couvert;
        $updateEvento->descricao = $request->novo_descricao;

        $updateEvento->save();

        $updateAtracao = Atracao::findOrFail($id); //TODO modificar
        
        $updateAtracao->nome = $request->novo_nome_atracao;

        $updateAtracao->save();

        return redirect("/dashboard");
    }

    public function getQrcode(Request $request){
        $id = $request['id'];
        $link = Avaliacao::where('id_avaliacao', $id)->get('link_avaliacao')[0]['link_avaliacao'];

        $qrcode = ['qrcode' => Qrcode::size(120)->generate($link),
                    'link' => $link];

        return view('admin.qrcode')->with('qrcode', $qrcode);
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Atracao;
use App\Models\Avaliacao;
use App\Models\Empresario;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class eventoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $nome = $data["nomeEvento"];
        $data = $data["dataEvento"];
        $hora = $data["horaEvento"];
        $valor_couvert = $data["valorCouvert"];
        $descricao = $data["eventoDescricao"];
        $nome_atracao = $data["nome_atracao"];
        

        $evento = new Evento();
        $evento->nome = $nome;
        $evento->data = $data;
        $evento->hora = $hora;
        $evento->valor_couvert = $valor_couvert;
        $evento->descricao = $descricao;

        $evento->save();

        //Criação do link de avaliação
        $evento_id = Evento::orderBy('id_evento', 'desc')->first();
        $url = env('APP_URL', 'http://localhost');
        $link = $url . '/avaliacao/' . $evento_id;

        $avaliacao = new Avaliacao();
        $avaliacao->link_avaliacao = $link;
        $avaliacao->evento_id = $evento_id;
        $avaliacao->save();

        return view("/");//TODO ajustar retorno
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
    // public function delete(Request $request, $id)
    // {

    //     $deleteEvento = Evento::findOrFail($id);
    //     $deleteEvento->delete();

    //     $deleteAtracao = Atracao::findOrFail($id);
    //     $deleteAtracao->delete();

    //     return redirect('/');
    // }
    
    public function getQrcode(Request $request){
        $id = $request['id'];
        $link = Avaliacao::where('id_avaliacao', $id)->get('link_avaliacao')[0]['link_avaliacao'];

        $qrcode = ['qrcode' => Qrcode::size(120)->generate($link),
                    'link' => $link];

        return view('admin.qrcode')->with('qrcode', $qrcode);
    }

}
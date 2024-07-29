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

    public function delete($id) {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect()->route('dashboard');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();        
        $evento = Evento::findOrFail($id);
        $evento->nome = $data['nome'];
        $evento->data = $data['data'];
        $evento->hora = $data['hora'];
        $evento->valor_couvert = $data['valor_couvert'];
        $evento->descricao = $data['descricao'];
        $evento->update();

        $generoEvento = GeneroEvento::findOrFail($id);
        $generoEvento->evento_id = $id;
        $generoEvento->genero_id = $data['genero_id'];
        $generoEvento->update();

        $atracao = Atracao::findOrFail($id);
        $atracao->nome = $data['atracao'];
        $atracao->evento_id = $id;
        $atracao->update();


        return redirect()->route('dashboard');
    }

    public function getQrcode($id){
        $link = Avaliacao::where('evento_id', $id)->get('link_avaliacao')[0]['link_avaliacao'];
        $link = json_decode(json_encode($link), true);

        $qrcode = ['qrcode' => Qrcode::size(120)->generate($link),
                    'link' => $link];

        return view('admin.qrcode')->with('qrcode', $qrcode);
    }

}
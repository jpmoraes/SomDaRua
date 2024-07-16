<?php

namespace App\Http\Controllers;

use App\Models\Empresario;
use App\Models\Estabelecimento;
use App\Models\Evento;
use App\Models\Genero;
use App\Models\GeneroEvento;
use App\Models\Secao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    /**
     * Método que retorna a view do dashboard de controle de eventos, com o array de eventos que pertencem àquele empresário
     * @return mixed|\Illuminate\Contracts\View\View
     */
    public function index(){
        $idSessao = Session::getId();
        $idCredencial = Secao::findOrFail($idSessao)->get('user_id')[0]['user_id'];

        $cpfEmpresario = Empresario::where('credenciais_id', $idCredencial)->get('cpf')[0]['cpf'];
        $idEstabelecimentoArray = Estabelecimento::where('empresario_cpf', $cpfEmpresario)->get('id_estabelecimento');
        $idEstabelecimentoArray = json_decode(json_encode($idEstabelecimentoArray), true);

        //criação de lista de eventos de todos os estabelecimentos do empresário logado
        $eventosArray = [];
        foreach($idEstabelecimentoArray as $idEstabelecimento){
            $eventos = Evento::where('estabelecimento_id', $idEstabelecimento)->get(['id_evento', 'nome', 'data', 'hora']);
            $eventos = json_decode(json_encode($eventos), true);
            foreach ($eventos as $evento) {
                array_push($eventosArray, $evento);
            }
        }

        //Tradução do genero_id para o nome dos generos
        $generoArray = [];
        $i = 0;
        foreach($eventosArray as $evento){
            $generoIdArray = GeneroEvento::where('genero_id', $evento['id_evento'])->get('genero_id');
            $generoIdArray = json_decode(json_encode($generoIdArray), true);

            foreach($generoIdArray as $generoId){
                $genero = Genero::where('id_genero', $generoId['genero_id'])->get('nome')[0]['nome'];
                array_push($generoArray, json_decode(json_encode($genero), true));
            }
            $eventosArray[$i]['genero'] = $generoArray[$i];
            $i++;
        }

        return view("admin.index")->with('eventosArray', $eventosArray);
    }

}
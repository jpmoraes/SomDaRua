<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

use App\Models\GeneroEvento;
use Carbon\Carbon;

class pageGenerosController extends Controller
{
    public function index(){
        $dataAtual = Carbon::now();
        $dataLimite = $dataAtual->copy()->addDays(60);

        $eventosArray = Evento::whereDate('data', '>=', $dataAtual)
            ->whereDate('data', '<=', $dataLimite)
            ->orderBy('data', 'asc')
            ->get(['id_evento', 'nome', 'data', 'hora']);

        foreach ($eventosArray as $evento) {
            $generos = GeneroEvento::where('evento_id', $evento['id_evento'])
                ->join('genero', 'genero.id_genero', '=', 'genero_evento.genero_id')
                ->get('nome');
            $generos = json_decode(json_encode($generos), true)[0];

            $evento['genero'] = $generos['nome'];
        }
        
        return view("home.generos")->with('eventosArray', $eventosArray);
    }

    public function filtro(Request $request){
        $data = $request->all();
        $dataAtual = Carbon::now();


        $genero = $data['genero'];

        $dataDestino = $data['date'];
        $dataDestino = str_replace("/", "-", $dataDestino);
        $dataDestino = date('Y-m-d', strtotime($dataDestino));

        if($genero === []){
            $eventosArray = Evento::whereDate('data', '>=', $dataAtual)
                                    ->whereDate('data', $dataDestino)
                                    ->get(['id_evento', 'nome', 'data', 'hora']);
        } else if ($dataDestino === []) {
            $eventosArray = Evento::whereDate('data', '>=', $dataAtual)
                                    ->join('genero_evento', 'evento.id_evento', '=', 'genero_evento.evento_id')
                                    ->where('genero_evento.genero_id', $genero)
                                    ->get(['evento.id_evento', 'evento.nome', 'evento.data', 'evento.hora']);
        } else {
            $eventosArray = Evento::whereDate('data', '>=', $dataAtual)
                                    ->whereDate('data', $dataDestino)
                                    ->join('genero_evento', 'evento.id_evento', '=', 'genero_evento.evento_id')
                                    ->where('genero_evento.genero_id', $genero)
                                    ->get(['evento.id_evento', 'evento.nome', 'evento.data', 'evento.hora']);
        }

        foreach ($eventosArray as $evento) {
            $generos = GeneroEvento::where('evento_id', $evento['id_evento'])
                                    ->join('genero', 'genero.id_genero', '=', 'genero_evento.genero_id')
                                    ->get('nome');
            $generos = json_decode(json_encode($generos), true)[0];

            $evento['genero'] = $generos['nome'];
        }

        return view("home.generos")->with('eventosArray', $eventosArray);
    }
}

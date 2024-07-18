<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\GeneroEvento;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $dataAtual = Carbon::now();
    $dataLimite = $dataAtual->copy()->addDays(60);

    $eventosArray = Evento::whereDate('data', '>=', $dataAtual)
        ->whereDate('data', '<=', $dataLimite)
        ->orderBy('data', 'asc')
        ->get(['id_evento', 'nome', 'data', 'hora']);

    foreach ($eventosArray as &$evento) {
        $generos = GeneroEvento::where('evento_id', $evento['id_evento'])
            ->join('genero', 'genero.id_genero', '=', 'genero_evento.genero_id')
            ->pluck('genero.nome')
            ->toArray();

        $evento['generos'] = $generos;
    }

    return view("home.index")->with('eventosArray', $eventosArray);
    }
}

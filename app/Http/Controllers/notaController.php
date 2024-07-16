<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;
use App\Models\Nota;
use Illuminate\Http\Request;

class notaController extends Controller {

    public function index(){
        return view("avaliacao.avaliacao");
    }

    public function store(Request $request){

        $idEvento = substr(parse_url($_SERVER['REQUEST_URI'])["path"], 11);

        $nota = new Nota();
        $nota->notas = $request["notas"];
        $nota->id_avaliacao = Avaliacao::where('evento_id', $idEvento)->get('id_avaliacao')[0]['id_avaliacao'];

        $nota->save();
        return view("avaliacao.sucesso");
    }

}



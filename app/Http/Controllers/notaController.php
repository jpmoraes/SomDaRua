<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nota;
use Illuminate\Http\Request;

class notaController extends Controller {

    public function index(){
        return view("avaliacao.avaliacao");
    }

    public function store(Request $request){
        $nota = new Nota();
        $nota->notas = $request["notas"];
        $nota->avaliacao_id_avaliacao = substr(parse_url($_SERVER['REQUEST_URI'])["path"], 11);

        $nota->save();
        return view("avaliacao.sucesso")->with("success","");
    }

}



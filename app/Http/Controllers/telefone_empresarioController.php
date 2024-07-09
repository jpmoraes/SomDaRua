<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TelefoneEmpresario;
use Illuminate\Http\Request;

class telefone_empresarioController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        
        $telefone = $data["telefone"]; 


        $telefone_empresario = new TelefoneEmpresario();
        $telefone_empresario->telefone = $telefone;


        $telefone_empresario->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showTelefoneEmpresario = TelefoneEmpresario::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateTelefoneEmpresario = TelefoneEmpresario::findOrFail($id);

        $updateTelefoneEmpresario->telefone = $request->novo_telefone;


        $updateTelefoneEmpresario->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteTelefoneEmpresario = TelefoneEmpresario::findOrFail($id);
        $deleteTelefoneEmpresario->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

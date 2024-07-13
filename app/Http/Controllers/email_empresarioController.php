<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmailEmpresario;
use Illuminate\Http\Request;

class email_empresarioController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        
        $email = $data["email"];

        $email_empresario = new EmailEmpresario();
        $email_empresario->email = $email;


        $email_empresario->save();
        
        return view("/");//TODO ajustar retorno
    }
    public function show(Request $request)
    {
        $showEmailEmpresario = EmailEmpresario::orderBy('id', 'asc')->get();

        return view("/"); //TODO ajustar retorno
    }
    public function update(Request $request, $id)
    {
        $updateEmailEmpresario = EmailEmpresario::findOrFail($id);

        $updateEmailEmpresario->email = $request->novo_email;


        $updateEmailEmpresario->save();

        return redirect("/"); //TODO ajustar retorno
    }
    public function delete(Request $request, $id)
    {

        $deleteEmailEmpresario = EmailEmpresario::findOrFail($id);
        $deleteEmailEmpresario->delete();

        return redirect('/'); //TODO ajustar retorno
    }
}

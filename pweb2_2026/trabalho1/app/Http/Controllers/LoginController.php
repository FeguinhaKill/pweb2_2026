<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{

    function index()
    {
        $dados = Login::all();
        return view('login', ['dados' => $dados]);
    }
public function store(Request $request)
{
    $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
        'senha' => 'required',
    ], [
        'nome.required' => 'O nome é obrigatório',
        'email.required' => 'O email é obrigatório',
        'senha.required' => 'A senha é obrigatória',
    ]);

    Login::create([
        'name' => $request->nome,
        'email' => $request->email,
        'password' =>$request->senha,,
    ]);

    return redirect('/login');
}
function update(Request $request, $id)
{
    $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
    ], [
        'nome.required' => "O nome é obrigatório",
        'email.required' => "O email é obrigatório",
    ]);

    $dados = [
        'name' => $request->nome,
        'email' => $request->email
    ];

    if ($request->filled('senha')) {
        $dados['password'] = $request->senha;
    }

    Login::find($id)->update($dados);

    return redirect('usuario');
}    
}

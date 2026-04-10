<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UsersController extends Controller {

public function index()
    {
        return view('login.index');
    }
    public function criar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|min:3',
        ], [
            'nome.required' => 'O nome é obrigatório',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'Email inválido',
            'email.unique' => 'Email já cadastrado',
            'senha.required' => 'A senha é obrigatória',
        ]);

        Users::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return redirect('/User')->with('success', 'Conta criada com sucesso!');
    }

    public function logar(Request $request)
{
    $request->validate([
        'nome' => 'required',
        'senha' => 'required',
    ]);

    $user = Users::where('nome', $request->nome)->first();

    if (!$user || $user->senha !== $request->senha) {
        return back()->withErrors(['login' => 'Nome ou senha inválidos']);
    }

    session([
        'user_id' => $user->id,
        'user_nome' => $user->nome
    ]);

    return redirect('/produtos')->with('success', 'Logado com sucesso!');
}
}
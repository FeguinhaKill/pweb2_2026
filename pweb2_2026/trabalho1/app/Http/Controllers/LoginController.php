<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
session_start();
class LoginController extends Controller
{
    public function submit(Request $request)
    {
        if ($request->has('possueconta')) {
            return $this->logar($request);
        }

        return $this->criar($request);
    }

    private function criar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:logins,email',
            'senha' => 'required|min:3',
        ], [
            'nome.required' => 'O nome é obrigatório',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'Email inválido',
            'email.unique' => 'Email já cadastrado',
            'senha.required' => 'A senha é obrigatória',
        ]);

        Login::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return redirect('/login')->with('success', 'Conta criada com sucesso!');
    }

    private function logar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'senha' => 'required',
        ], [
            'nome.required' => 'O nome é obrigatório',
            'senha.required' => 'A senha é obrigatória',
        ]);

        $login = Login::where('nome', $request->nome)->first();

        if ($login && $request->senha === $login->senha) {
            $_SESSION['nome'] = $login->nome;

            return redirect('/produtos');
        }

        return back()->withErrors([
            'nome' => 'Credenciais inválidas'
        ])->withInput();
    }
}
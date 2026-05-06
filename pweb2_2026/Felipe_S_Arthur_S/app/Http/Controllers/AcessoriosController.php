<?php

namespace App\Http\Controllers;

use App\Models\Acessorios;
use Illuminate\Http\Request;

class AcessoriosController extends Controller
{
    public function index()
    {
        $dados = Acessorios::all();
        return view('Acessorios.acessorios', compact('dados'));
    }

    public function form()
    {
        return view('Acessorios.acessoriosform', ['dado' => null]);
    }

    public function editar($id)
    {
        $dado = Acessorios::findOrFail($id);
        return view('Acessorios.acessoriosform', compact('dado'));
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
        ]);

        Acessorios::create($request->all());

        return redirect()->route('acessorios.index');
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
        ]);

        $acessorio = Acessorios::findOrFail($id);
        $acessorio->update($request->all());

        return redirect()->route('acessorios.index');
    }

    public function deletar($id)
    {
        Acessorios::findOrFail($id)->delete();

        return redirect()->route('acessorios.index');
    }

    public function pesquisar(Request $request)
    {
        $tipo = $request->tipo;
        $valor = $request->valor;

        $permitidos = ['nome', 'preco', 'descricao'];

        if (!in_array($tipo, $permitidos)) {
            return redirect()->route('acessorios.index');
        }

        $dados = Acessorios::where($tipo, 'like', "%$valor%")->get();

        return view('Acessorios.acessorios', compact('dados'));
    }
}

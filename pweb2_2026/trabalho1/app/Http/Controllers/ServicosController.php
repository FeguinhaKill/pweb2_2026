<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index()
    {
        $dados = Servicos::all();
        return view('Servicos.servicos', compact('dados'));
    }

    public function criar()
    {
        return view('Servicos.servicosform', ['dado' => null]);
    }

    public function editar($id)
    {
        $dado = Servicos::findOrFail($id);
        return view('Servicos.servicosform', compact('dado'));
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);

        Servicos::create($request->all());

        return redirect()->route('servicos.index');
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);

        $servico = Servicos::findOrFail($id);
        $servico->update($request->all());

        return redirect()->route('servicos.index');
    }

    public function deletar($id)
    {
        Servicos::findOrFail($id)->delete();

        return redirect()->route('servicos.index');
    }

    public function pesquisar(Request $request)
    {
        $tipo = $request->tipo;
        $valor = $request->valor;

        $dados = Servicos::where($tipo, 'like', "%$valor%")->get();

        return view('Servicos.servicos', compact('dados'));
    }
}
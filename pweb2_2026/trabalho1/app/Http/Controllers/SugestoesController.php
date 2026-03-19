<?php

namespace App\Http\Controllers;

use App\Models\Sugestoes;
use Illuminate\Http\Request;

class SugestoesController extends Controller
{
    public function index()
    {
        $dados = Sugestoes::all();
        return view('Sugestoes.sugestoes', compact('dados'));
    }

    public function criar()
    {
        return view('Sugestoes.sugestoesform', ['dado' => null]);
    }

    public function editar($id)
    {
        $dado = Sugestoes::findOrFail($id);
        return view('Sugestoes.sugestoesform', compact('dado'));
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'palavras_chaves' => 'required',
        ]);

        Sugestoes::create($request->all());

        return redirect()->route('sugestoes.index');
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'palavras_chaves' => 'required',
        ]);

        $sugestao = Sugestoes::findOrFail($id);
        $sugestao->update($request->all());

        return redirect()->route('sugestoes.index');
    }

    public function deletar($id)
    {
        Sugestoes::findOrFail($id)->delete();

        return redirect()->route('sugestoes.index');
    }

    public function pesquisar(Request $request)
    {
        $tipo = $request->tipo;
        $valor = $request->valor;

        $permitidos = ['titulo', 'descricao', 'palavras_chaves'];

        if (!in_array($tipo, $permitidos)) {
            return redirect()->route('sugestoes.index');
        }

        $dados = Sugestoes::where($tipo, 'like', "%$valor%")->get();

        return view('Sugestoes.sugestoes', compact('dados'));
    }
}
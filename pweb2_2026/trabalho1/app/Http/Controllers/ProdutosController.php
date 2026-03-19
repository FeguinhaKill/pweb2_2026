<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $dados = Produtos::all();
        return view('Produtos.produtos', compact('dados'));
    }

    public function criar()
    {
        return view('Produtos.produtosform', ['dado' => null]);
    }

    public function editar($id)
    {
        $dado = Produtos::findOrFail($id);
        return view('Produtos.produtosform', compact('dado'));
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'categoria' => 'required',
            'mecanismo' => 'required',
        ]);

        Produtos::create($request->all());

        return redirect()->route('produtos.index');
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'categoria' => 'required',
            'mecanismo' => 'required',
        ]);

        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());

        return redirect()->route('produtos.index');
    }

    public function deletar($id)
    {
        Produtos::findOrFail($id)->delete();

        return redirect()->route('produtos.index');
    }

    public function pesquisar(Request $request)
    {
        $tipo = $request->tipo;
        $valor = $request->valor;

        $dados = Produtos::where($tipo, 'like', "%$valor%")->get();

        return view('Produtos.produtos', compact('dados'));
    }
}
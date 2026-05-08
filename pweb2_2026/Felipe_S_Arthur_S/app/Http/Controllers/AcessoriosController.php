<?php

namespace App\Http\Controllers;

use App\Models\Acessorios;
use App\Models\Produtos;
use Illuminate\Http\Request;

class AcessoriosController extends Controller
{
    public function index(Request $request)
    {
        $dados = Acessorios::with('produtos');

        // Verifica se há parâmetros de filtro na URL
        if ($request->has('tipo') && $request->has('valor')) {
            $tipo = $request->tipo;
            $valor = $request->valor;

            $permitidos = ['nome', 'preco', 'descricao', 'produto', 'produto_id'];

            if (in_array($tipo, $permitidos)) {
                if ($tipo == 'produto') {
                    $dados = $dados->whereHas('produtos', function ($q) use ($valor) {
                        $q->where('nome', 'like', "%$valor%");
                    });
                } elseif ($tipo == 'produto_id') {
                    $dados = $dados->whereHas('produtos', function ($q) use ($valor) {
                        $q->where('produtos.id', $valor);
                    });
                } else {
                    $dados = $dados->where($tipo, 'like', "%$valor%");
                }
            }
        }

        $dados = $dados->get();
        return view('Acessorios.acessorios', compact('dados'));
    }

    public function form()
    {
        $produtos = Produtos::all();
        return view('Acessorios.acessoriosform', ['dado' => null, 'produtos' => $produtos]);
    }

    public function editar($id)
    {
        $dado = Acessorios::with('produtos')->findOrFail($id);
        $produtos = Produtos::all();
        return view('Acessorios.acessoriosform', compact('dado', 'produtos'));
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
        ]);

        $acessorio = Acessorios::create($request->all());
        $acessorio->produtos()->attach($request->produto_id);

        return redirect()->route('acessorios.index');
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
        ]);

        $acessorio = Acessorios::findOrFail($id);
        $acessorio->update($request->all());
        $acessorio->produtos()->sync([$request->produto_id]);

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

        $permitidos = ['nome', 'preco', 'descricao', 'produto_id', 'produto'];

        if (!in_array($tipo, $permitidos)) {
            return redirect()->route('acessorios.index');
        }

        if ($tipo == 'produto_id') {
            $dados = Acessorios::with('produtos')->whereHas('produtos', function ($q) use ($valor) {
                $q->where('id', $valor);
            })->get();
        } elseif ($tipo == 'produto') {
            $dados = Acessorios::with('produtos')->whereHas('produtos', function ($q) use ($valor) {
                $q->where('nome', 'like', "%$valor%");
            })->get();
        } else {
            $dados = Acessorios::with('produtos')->where($tipo, 'like', "%$valor%")->get();
        }

        return view('Acessorios.acessorios', compact('dados'));
    }
}

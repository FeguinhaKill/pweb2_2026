<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use App\Models\ProdutosCategoria;
use App\Models\ProdutosMecanismo;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Charts\QtdProdutosCategoria;
use App\Charts\QtdProdutosMecanismo;
use Illuminate\Database\QueryException;

class ProdutosController extends Controller
{
    public function index()
    {
        $dados = Produtos::with(['categoria', 'mecanismo', 'acessorios'])->get();

        return view('Produtos.produtos', compact('dados'));
    }

    public function criar()
    {
        return view('Produtos.produtosform', ['dado' => null]);
    }

    public function editar($id)
{
    $dado = Produtos::findOrFail($id);

    $categorias = ProdutosCategoria::all();
    $mecanismos = ProdutosMecanismo::all();

    return view('Produtos.produtosform', compact('dado', 'categorias', 'mecanismos'));
}

public function salvar(Request $request)
{
    $request->validate([
        'imagem' => 'nullable|image|mimes:png,jpg,jpeg',
        'nome' => 'required',
        'descricao' => 'required',
        'preco' => 'required|numeric',
        'categoria_id' => 'required',
        'mecanismo_id' => 'required',
    ]);

    $data = $request->all();

    // Tratamento da imagem
    if ($request->hasFile('imagem')) {
        $path = $request->file('imagem')->store('imagens', 'public');
        $data['imagem'] = $path;
    }

    Produtos::create($data);

    return redirect()->route('produtos.index');
}
    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'categoria_id' => 'required',  
            'mecanismo_id' => 'required',   
        ]);

        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());

        return redirect()->route('produtos.index');
    }

   public function deletar($id)
{
    $produto = Produtos::findOrFail($id);

    if($produto->acessorios()->count() > 0)
    {
        return redirect()
            ->route('produtos.index')
            ->with('error', 'Remova os acessórios do produto antes de deletá-lo.');
    }

    $produto->delete();

    return redirect()
        ->route('produtos.index')
        ->with('success', 'Produto deletado com sucesso!');
}
    public function pesquisar(Request $request)
    {
        if (!empty($request->valor)) {

            if ($request->tipo == 'categoria_id') {
                $dados = Produtos::with(['categoria', 'mecanismo', 'acessorios'])->whereHas('categoria', function ($q) use ($request) {
                    $q->where('nome', 'like', '%' . $request->valor . '%');
                })->get();
            } else if($request->tipo == 'mecanismo_id') {
                $dados = Produtos::with(['categoria', 'mecanismo', 'acessorios'])->whereHas('mecanismo', function ($q) use ($request) {
                    $q->where('nome', 'like', '%' . $request->valor . '%');
                })->get();
            } else {
                $dados = Produtos::with(['categoria', 'mecanismo', 'acessorios'])->where(
                    $request->tipo,
                    'like',
                    '%' . $request->valor . '%'
                )->get();
            }
        }

        else {
            $dados = Produtos::with(['categoria', 'mecanismo', 'acessorios'])->get();
        }

        return view('Produtos.produtos', ['dados' => $dados]);
}
public function form($id = null)
{
    $dado = $id ? Produtos::find($id) : null;

    $categorias = ProdutosCategoria::all();
    $mecanismos = ProdutosMecanismo::all();

    return view('Produtos.produtosform', compact('dado', 'categorias', 'mecanismos'));
}
    public function report()
    {
        $produtos = Produtos::orderBy('id')->get();

        $data = [
            'titulo' => 'Relatório Produtos',
            'produtos' => $produtos,
        ];

        $pdf = Pdf::loadView('produtos.report', $data);

        return $pdf->download('relatorio_produtos.pdf');
    }

    function chartCategoria(QtdProdutosCategoria $chart)
    {
        return view('Produtos.chartCategoria', ['chart' => $chart->build()]);
    }

    function chartMecanismo(QtdProdutosMecanismo $chart)
    {
        return view('Produtos.chartMecanismo', ['chart' => $chart->build()]);
    }
}
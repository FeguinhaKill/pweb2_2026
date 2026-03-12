<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $dados = Produtos::all();
        return view('produtos', ['dados' => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nome' => 'required',
        'descricao' => 'required',
        'preco' => 'required|numeric',
        'categoria' => 'required',
        'mecanismo' => 'required',
    ], [
        'nome.required' => 'O nome é obrigatório',
        'descricao.required' => 'A descrição é obrigatória',
        'preco.required' => 'O preço é obrigatório',
        'categoria.required' => 'A categoria é obrigatória',
        'mecanismo.required' => 'O mecanismo é obrigatório',
    ]);

    Produtos::create([
        'nome' => $request->nome,
        'descricao' => $request->descricao,
        'preco' => $request->preco,
        'categoria' => $request->categoria,
        'mecanismo' => $request->mecanismo,
    ]);

    return redirect('/produtos');
}

    /**
     * Display the specified resource.
     */
    public function show(Produtos $produtos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    function update(Request $request, $id)
{
    $request->validate([
        'nome' => 'required',
        'descricao' => 'required',
        'preco' => 'required|numeric',
        'categoria' => 'required',
        'mecanismo' => 'required',
    ], [
        'nome.required' => "O nome é obrigatório",
        'descricao.required' => "A descrição é obrigatória",
        'preco.required' => "O preço é obrigatório",
        'categoria.required' => "A categoria é obrigatória",
        'mecanismo.required' => "O mecanismo é obrigatório",
    ]);

    $dados = [
        'nome' => $request->nome,
        'descricao' => $request->descricao,
        'preco' => $request->preco,
        'categoria' => $request->categoria,
        'mecanismo' => $request->mecanismo,
    ];


    Produtos::find($id)->update($dados);

    return redirect('produtos');
}  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produtos $produtos)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Servicos::all();
        return view('servicos', ['dados' => $dados]);
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
        'preco' => 'required',
        'descricao' => 'required',
    ], [
        'nome.required' => 'O nome é obrigatório',
        'preco.required' => 'O preco é obrigatório',
        'descricao.required' => 'A descrição é obrigatória',
    ]);

    Produtos::create([
        'nome' => $request->nome,
        'preco' => $request->preco,
        'descricao' => $request->descricao,
    ]);

    return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicos $servicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicos $servicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'nome' => 'required',
        'preco' => 'required',
        'descricao' => 'required',
    ], [
        'nome.required' => "O nome é obrigatório",
        'preco.required' => "O preco é obrigatório",
        'descricao.required' => "A descrição é obrigatória",
    ]);

    $dados = [
        'nome' => $request->nome,
        'preco' => $request->preco,
        'descricao' => $request->descricao,
    ];


    Produtos::find($id)->update($dados);

    return redirect('servicos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicos $servicos)
    {
        //
    }
}

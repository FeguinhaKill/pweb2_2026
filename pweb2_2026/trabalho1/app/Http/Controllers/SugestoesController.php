<?php

namespace App\Http\Controllers;

use App\Models\Sugestoes;
use Illuminate\Http\Request;

class SugestoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Sugestoes::all();
        return view('Sugestoes', ['dados' => $dados]);
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
    public function salvar(Request $request)
    {
        $request->validate([
        'titulo' => 'required',
        'descricao' => 'required',
        'palavras_chaves'=> 'required',
    ], [
        'titulo.required' => 'O titulo é obrigatório',
        'descricao.required' => 'A descrição é obrigatória',
        'palavras_chaves.required' => 'As palavras-chave são obrigatórias',
    ]);

    Sugestoes::create([
        'titulo' => $request->titulo,
        'descricao' => $request->descricao,
        'palavras_chaves' => $request->palavras_chaves,
    ]);

    return redirect('/sugestoes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sugestoes $Sugestoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sugestoes $Sugestoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function atualizar(Request $request, $id)
    {
        $request->validate([
        'titulo' => 'required',
        'descricao' => 'required',
        'palavras_chaves'=> 'required',
    ], [
        'titulo.required' => "O titulo é obrigatório",
        'descricao.required' => "A descrição é obrigatória",
        'palavras_chaves.required' => "As palavras-chave são obrigatórias",
    ]);

    $dados = [
        'titulo' => $request->titulo,
        'descricao' => $request->descricao,
        'palavras_chaves' => $request->palavras_chaves,
    ];


    Sugestoes::find($id)->update($dados);

    return redirect('Sugestoes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sugestoes $Sugestoes)
    {
        //
    }
}

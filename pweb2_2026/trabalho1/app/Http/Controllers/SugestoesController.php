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
    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required',
        'descricao' => 'required',
        'palavras_chaves'=> 'required',
    ], [
        'nome.required' => 'O nome é obrigatório',
        'descricao.required' => 'A descrição é obrigatória',
        'palavras_chaves.required' => 'As palavras-chave são obrigatórias',
    ]);

    Sugestoes::create([
        'nome' => $request->nome,
        'descricao' => $request->descricao,
        'palavras_chaves' => $request->palavras_chaves,
    ]);

    return redirect('/Sugestoes');
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
    public function update(Request $request, $id)
    {
        $request->validate([
        'nome' => 'required',
        'descricao' => 'required',
        'palavras_chaves'=> 'required',
    ], [
        'nome.required' => "O nome é obrigatório",
        'descricao.required' => "A descrição é obrigatória",
        'palavras_chaves.required' => "As palavras-chave são obrigatórias",
    ]);

    $dados = [
        'nome' => $request->nome,
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

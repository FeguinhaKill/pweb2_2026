<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class QtdProdutosCategoria
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $produtosPorCategoria = DB::table('produtos')
            ->join('categoria_produtos', 'categoria_produtos.id', '=', 'produtos.categoria_id')
            ->select('categoria_produtos.nome', DB::raw('count(1) as qtd_produtos'))
            ->groupBy('categoria_produtos.nome')
            ->orderBy('qtd_produtos', 'desc')
            ->get();

        $qtdProdutos = [];
        $nomeCategorias = [];

        foreach ($produtosPorCategoria as $item) {
            $qtdProdutos[] = $item->qtd_produtos;
            $nomeCategorias[] = $item->nome;
        }

        return $this->chart->pieChart()
            ->setTitle('QTD Produtos por Categoria')
            ->setSubtitle('2026')
            ->addData($qtdProdutos)
            ->setLabels($nomeCategorias);
    }
}
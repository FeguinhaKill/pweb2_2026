<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class QtdProdutosMecanismo
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $produtosPorMecanismo = DB::table('produtos')
            ->join('mecanismo_produtos', 'mecanismo_produtos.id', '=', 'produtos.mecanismo_id')
            ->select('mecanismo_produtos.nome', DB::raw('count(1) as qtd_produtos'))
            ->groupBy('mecanismo_produtos.nome')
            ->orderBy('qtd_produtos', 'desc')
            ->get();

        $qtdProdutos = [];
        $nomeMecanismos = [];

        foreach ($produtosPorMecanismo as $item) {
            $qtdProdutos[] = $item->qtd_produtos;
            $nomeMecanismos[] = $item->nome;
        }

        return $this->chart->pieChart()
            ->setTitle('QTD Produtos por Mecanismo')
            ->setSubtitle('2026')
            ->addData($qtdProdutos)
            ->setLabels($nomeMecanismos);
    }
}
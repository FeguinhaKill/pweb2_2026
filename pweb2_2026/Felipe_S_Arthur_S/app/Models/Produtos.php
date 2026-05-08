<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'categoria_id',
        'mecanismo_id',
        'imagem',
    ];

    protected $appends = ['imagem_caminho'];

    public function categoria()
    {
        return $this->belongsTo(ProdutosCategoria::class, 'categoria_id');
    }

    public function mecanismo()
    {
        return $this->belongsTo(ProdutosMecanismo::class, 'mecanismo_id');
    }

    public function acessorios()
    {
        return $this->belongsToMany(Acessorios::class, 'produto_acessorio', 'produto_id', 'acessorio_id');
    }

    public function getImagemCaminhoAttribute()
    {
        return !empty($this->imagem) ? $this->imagem : 'imagens/Simagem.png';
    }
}

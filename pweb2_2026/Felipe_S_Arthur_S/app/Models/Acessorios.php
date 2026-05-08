<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acessorios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'preco',
        'descricao',
        'imagem',
    ];

    protected $appends = ['imagem_caminho'];

    public function getImagemCaminhoAttribute()
    {
        return !empty($this->imagem) ? $this->imagem : 'imagens/Simagem.png';
    }

    public function produtos()
    {
        return $this->belongsToMany(Produtos::class, 'produto_acessorio', 'acessorio_id', 'produto_id');
    }
}

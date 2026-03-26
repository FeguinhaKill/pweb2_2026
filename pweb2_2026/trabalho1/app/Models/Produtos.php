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
    ];
    public function categoria()
    {
        return $this->belongsTo(ProdutosCategoria::class, 'categoria_id');
    }
    public function mecanismo()
    {
        return $this->belongsTo(ProdutosMecanismo::class, 'mecanismo_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acessorios extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto_id',
        'nome',
        'preco',
        'descricao',
    ];
    public function produto()
    {
        return $this->belongsTo(Produtos::class, 'produto_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProdutos extends Model
{
    use HasFactory;
    protected $table = 'categoria_produtos';

    protected $fillable = [
        'nome',
        'categoria',
    ];
}

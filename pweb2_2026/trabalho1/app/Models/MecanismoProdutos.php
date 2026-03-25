<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MecanismoProdutos extends Model
{
    use HasFactory;
    protected $table = 'mecanismo_produtos';

    protected $fillable = [
        'nome',
        'mecanismo',
    ];
}

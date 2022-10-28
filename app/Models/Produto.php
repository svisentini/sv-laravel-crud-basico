<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // SV : Informa a nossa model que esses campos que estão dentro do array serão preenchidos e/ou editados por nosso código
    protected $fillable = ['nome', 'custo', 'preco', 'quantidade'];
    
}

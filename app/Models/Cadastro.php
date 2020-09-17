<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'TBL_CADASTRA_EMPREGADO';
    protected $fillable = [
        'name',
        'matricula',
        'coordenacao',
        'unidade'
        ];
}

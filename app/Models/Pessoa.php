<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'pessoa_matricula',
        'pessoa_nome',
        'pessoa_pessoa_cpf',
        'pessoa_cep',
        'pessoa_endereco',
        'pessoa_bairro',
        'pessoa_numero',
        'pessoa_telefone',
        'pessoa_complemento',
        'pessoa_cod_municipio',
        'pessoa_dthr_cadastro',
        'pessoa_email',
        'pessoa_senha'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['nome_completo', 'genero', 'data_nascimento', 'signo', 'celular', 'email'];
    use HasFactory;
}

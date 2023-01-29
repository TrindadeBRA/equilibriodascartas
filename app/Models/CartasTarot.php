<?php
// Models, dentro da arquitetura MVC, são classes responsáveis pela leitura, escrita e validação de qualquer dado.
// Por isso, será aqui que iremos trabalhar com Eloquent para fazermos todo tipo de ações no nosso banco de dados.

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartasTarot extends Model
{
    use HasFactory;
}

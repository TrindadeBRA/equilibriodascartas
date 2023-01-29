<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use DateTime;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request){
        
        if($request) {
            $cliente = new Clientes();
            $cliente->nome_completo = $request->input("nome_completo");
            $cliente->genero = $request->input("genero");
            $cliente->data_nascimento = $request->input("data_nascimento");
            $cliente->signo = $this->getZodiacSign($cliente->data_nascimento);
            $cliente->celular = $request->input("celular");
            $cliente->email = $request->input("email");
            
            // print_r($cliente->getAttributes());
            $cliente->save();
        }

        $x = ['type' => 'novo-jogo'];

        return view('admin.dashboard', $x);
    }

    public function getZodiacSign($data_nascimento) {
        //Passar a data de nascimento no formato "YYYY-MM-DD" para que o código funcione corretamente.
        $date = new DateTime($data_nascimento);
        $month = $date->format('m');
        $day = $date->format('d');
        if (($month == 12 && $day >= 22 && $day <= 31) || ($month == 1 && $day >= 1 && $day <= 19)) {
            return "Capricórnio";
        } elseif (($month == 1 && $day >= 20 && $day <= 31) || ($month == 2 && $day >= 1 && $day <= 17)) {
            return "Aquário";
        } elseif (($month == 2 && $day >= 18 && $day <= 29) || ($month == 3 && $day >= 1 && $day <= 19)) {
            return "Pisces";
        } elseif (($month == 3 && $day >= 20 && $day <= 31) || ($month == 4 && $day >= 1 && $day <= 19)) {
            return "Áries";
        } elseif (($month == 4 && $day >= 20 && $day <= 30) || ($month == 5 && $day >= 1 && $day <= 20)) {
            return "Touro";
        } elseif (($month == 5 && $day >= 21 && $day <= 31) || ($month == 6 && $day >= 1 && $day <= 20)) {
            return "Gêmeos";
        } elseif (($month == 6 && $day >= 21 && $day <= 30) || ($month == 7 && $day >= 1 && $day <= 22)) {
            return "Câncer";
        } elseif (($month == 7 && $day >= 23 && $day <= 31) || ($month == 8 && $day >= 1 && $day <= 22)) {
            return "Leão";
        } elseif (($month == 8 && $day >= 23 && $day <= 31) || ($month == 9 && $day >= 1 && $day <= 22)) {
            return "Virgem";
        } elseif (($month == 9 && $day >= 23 && $day <= 30) || ($month == 10 && $day >= 1 && $day <= 22)) {
            return "Libra";
        } elseif (($month == 10 && $day >= 23 && $day <= 31) || ($month == 11 && $day >= 1 && $day <= 21)) {
            return "Escorpião";
        } elseif (($month == 11 && $day >= 22 && $day <= 30) || ($month == 12 && $day >= 1 && $day <= 21)) {
            return "Sagitário";
        }
    }
}
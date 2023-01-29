<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){

        $clientes = [
            0 => [
                "nome" => "Fornecedores 01",
                "status" => "N",
                "cnpj" => "00000"
            ],
            1 => [
                "nome" => "Fornecedores 02",
                "status" => "S",
                "cnpj" => "00010"
            ],
        ];
        return view('admin.dashboard', compact('clientes'));
    }
}
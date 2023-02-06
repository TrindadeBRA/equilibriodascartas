<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});



Route::prefix('/admin')->group(function(){

    Route::get('/', function () { return view('admin.dashboard', ['type' => 'unset']);})
        ->name('admin.home');

    Route::get('/clientes', [ClienteController::class, 'listarClientes'])
        ->name('admin.listar-clientes');


    Route::get('/novo-cliente', [ClienteController::class, 'index'])
        ->name('admin.novo-cliente');

    Route::post('/novo-cliente', [ClienteController::class, 'salvar']);

});
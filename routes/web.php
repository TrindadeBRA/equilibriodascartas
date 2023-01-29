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

    Route::get('/', function () {
        return view('admin.dashboard', ['type' => 'unset']);
    })->name('admin.home');

    Route::get('/novo-jogo', [ClienteController::class, 'index'])->name('admin.novo-jogo');
    Route::post('/novo-jogo', [ClienteController::class, 'index'])->name('admin.novo-jogo');


});
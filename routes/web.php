<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FormatoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/trabajaConNosotros', function () {
    return view('trabajaConNosotros');
})->name('trabaja');

Auth::routes(['verify' => true]);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/language/{locale}', [App\Http\Controllers\LanguageController::class, 'swap']);


Route::resource('/productos', ProductoController::class);
Route::resource('/pedidos', PedidoController::class);
Route::resource('/categorias', CategoriaController::class);
Route::resource('/formatos', FormatoController::class);
Route::resource('/clientes', ClienteController::class);

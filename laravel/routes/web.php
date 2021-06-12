<?php

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

/* Rotas da aplicação */

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function() {
  Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
  Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class, 'index'])->name('app.fornecedores');
  Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});

Route::fallback(function() {
  echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});

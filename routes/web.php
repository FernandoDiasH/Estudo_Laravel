<?php

use App\Http\Controllers\CaixaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LancamentoController;
use App\Http\Controllers\SetorController;
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

Route::get('/', [HomeController::class, 'show']);
Route::get('/testeReq', function(){
    return 'Meu nome é carlinhos';
});

Route::prefix('setor')->group(function(){
    Route::get('/', [SetorController::class, 'showSetores'])->name('setor');
    Route::post('/', [SetorController::class, 'cadastrarSetor'])->name('setor.create');
    Route::get('editar/{id}', [SetorController::class, 'showEditarSetor'])->name('setor.showEditar');
    Route::post('editar/{id}', [SetorController::class, 'editarSetor'])->name('setor.editar');
    Route::delete('delete/{id}', [SetorController::class, 'deletarSetor'])->name('setor.delete');
});

Route::prefix('categoria')->group(function(){
    Route::get('/',[CategoriaController::class, 'showCategoria'])->name('categoria');
    Route::post('/', [CategoriaController::class, 'cadastrarCategoria'])->name('categoria.create');
    Route::get('editar/{id}', [CategoriaController::class, 'showEditarCategoria'])->name('categoria.showEditar');
    Route::post('editar', [CategoriaController::class, 'editarCategoria'])->name('categoria.editar');
    Route::delete('delete/{id}', [CategoriaController::class, 'deletarCategoria'])->name('categoria.delete');
});
Route::prefix('fornecedor')->group(function(){
    Route::get('/',[FornecedorController::class, 'showFornecedor'])->name('fornecedor');
    Route::post('/', [FornecedorController::class, 'cadastrarFornecedor'])->name('fornecedor.create');
    Route::get('editar/{id}', [FornecedorController::class, 'showEditarFornecedor'])->name('fornecedor.showEditar');
    Route::post('editar', [FornecedorController::class, 'editarFornecedor'])->name('fornecedor.editar');
    Route::delete('delete/{id}', [FornecedorController::class, 'deletarFornecedor'])->name('fornecedor.delete');
});

Route::prefix('solicitacao')->group(function(){
    Route::prefix('caixa')->group(function(){
        Route::get('/', [CaixaController::class, 'showCaixa'])->name('caixa');
        Route::post('/', [CaixaController::class, 'createCaixa'])->name('caixa.create');
        Route::get('finalizar/{id}',[CaixaController::class, 'showFinalizarSolicitacao'])->name('caixa.showFinalizar');
        Route::post('Finalizar/{id}',[CaixaController::class, 'finalizarSolicitacao'])->name('caixa.finalizar');
    });
});

Route::prefix('Listar')->group(function(){
    Route::get('caixa', [CaixaController::class, 'showListarCaixa'])->name('listarCaixa');
    Route::post('bucar', [CaixaController::class, 'buscarNome'])->name('busca');

});









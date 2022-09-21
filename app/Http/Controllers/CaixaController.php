<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaixaRequest;
use App\Models\Caixa;
use App\Models\FinalizarCaixa;
use App\Models\Setor;
use Illuminate\Http\Request;
use LDAP\Result;

use function PHPSTORM_META\type;

class CaixaController extends Controller
{
   public function showCaixa(Setor $setor){
        $setores = $setor->getSetores();

       return view('solicitacao.caixa', compact('setores'));
   }

   public function createCaixa(Request $request){
        //dd($request->all());
        Caixa::create($request->all());

      return redirect()->back()->with('msg', 'Cadastrado com sucesso');
   }

   public function showListarCaixa(Caixa $caixa){
        $caixas = $caixa->getCaixas();
       return view('listar.caixa', compact('caixas'));
   }

   public function showFinalizarSolicitacao(Caixa $caixa, $id){
       $getCaixa = $caixa->getCaixa($id);

       return view('finalizar.caixa', compact('getCaixa'));
   }

   public function finalizarSolicitacao(Request $request, $id, FinalizarCaixa $finalizarCaixa, Caixa $caixa){

        $finalizarCaixa->finalizacaoCaixa($request, $id);
        $caixa->atualizarSituacao($id);

        return redirect('Listar/caixa')->with('msg', 'Cadastrado com sucesso');

   }
   public function buscarNome(Caixa $caixa, Request $request){
       $caixas = $caixa->getNomeCaixa($request->nome);



        return view('listar.caixa', compact('caixas'));
   }
}

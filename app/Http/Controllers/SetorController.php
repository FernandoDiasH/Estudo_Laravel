<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetorRequest;
use App\Models\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function showSetores(Setor $setor){

        $setores = $setor->getSetores();
        return view('cadastro/Setor', compact('setores'));
    }

    public function cadastrarSetor(SetorRequest $request){

        Setor::create($request->validated());
        return redirect()->back()->with('msg', 'Cadastrado com sucesso');
    }

    public function deletarSetor(Setor $setor, $id){

        $setor->deletarSetor($id);
        return redirect()->back();
    }

    public function showEditarSetor(Setor $setor, $id){
        $setor = $setor->getSetor($id);
        return view('editar/setor', compact('setor'));
    }

    public function editarSetor(SetorRequest $request, Setor $setor, ){
        $dados = $request->validated();
        $setor->updateSetor($request->id, $dados['setor']);

        return redirect('setor')->with('msg', 'Editado com sucesso');

    }

}

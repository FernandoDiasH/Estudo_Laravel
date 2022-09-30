<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedorRequest;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function showFornecedor(Fornecedor $fornecedor){
        $fornecedores = $fornecedor->getSuppliers();
        
        return view('cadastro/Fornecedor', compact('fornecedores'));
    }

    public function cadastrarFornecedor(FornecedorRequest $request){
        Fornecedor::create($request->all());
        return redirect()->back()->with('msg', 'Cadastrado com sucesso');
    }

    public function deletarFornecedor(Fornecedor $fornecedor, $id){

        $fornecedor->deletarFornecedor($id);
        return redirect()->back();

    }
    public function showEditarFornecedor(Fornecedor $fornecedor, $id){
        $fornecedor = $fornecedor->getFornecedor($id);


        return view('editar/fornecedor', compact('fornecedor'));
    }

    public function editarFornecedor(FornecedorRequest $request, Fornecedor $fornecedor ){
        $dados = $request->validated();
        $fornecedor->updateFornecedor($request->id, $dados['fornecedores']);

        return redirect('fornecedor')->with('msg', 'Editado com sucesso');

    }
}

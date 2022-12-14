<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function showCategoria(Categoria $categoria){
        $categorias = $categoria->getCategorias();

        return view('cadastro/Categoria', compact('categorias'));
    }

    public function cadastrarCategoria(CategoriaRequest $request){

        Categoria::create($request->validated());
        return redirect()->back()->with('msg', 'Cadastrado com sucesso');
    }

    public function deletarCategoria(Categoria $categoria, $id){
        $categoria->deletarCategoria($id);
        return redirect()->back();
    }

    public function showEditarCategoria(Categoria $categoria, $id){
        $categoria = $categoria->getCategoria($id);


        return view('editar/categoria', compact('categoria'));
    }

    public function editarCategoria(CategoriaRequest $request, Categoria $categoria, ){
        $dados = $request->validated();
        $categoria->updateCategoria($request->id, $dados['categorias']);

        return redirect('categoria')->with('msg', 'Editado com sucesso');

    }
}

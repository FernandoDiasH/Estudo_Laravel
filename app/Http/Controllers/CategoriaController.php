<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class CategoriaController extends Controller
{
    public function showCategoria(Categoria $categoria){
        $categorias = $categoria->getCategorias();
        //dd($categorias);

        return view('cadastro/Categoria', compact('categorias'));
    }

    public function cadastrarCategoria(CategoriaRequest $request){

        Categoria::create($request->validated());
        return json_encode(array("msg" => 'cadastrado com sucesso'));
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

    public function teste(Request $request){

        return $request[2];

    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Setor;
use App\models\Categoria;
use App\models\Fornecedor;


class CadastroController extends Controller
{
    public function show(Request $request){


        //return json_encode(array("nome" => $request->all()));

        return $request;

    }



}

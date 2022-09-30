<?php

namespace App\Http\Controllers;

use App\Models\Caixa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Caixa $caixa){
        $caixa = $caixa->caixaAberto();

        return view('index', compact('caixa'));
    }
}

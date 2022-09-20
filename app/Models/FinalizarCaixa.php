<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalizarCaixa extends Model
{
    use HasFactory;

    protected $table = 'finalizar_caixa';
    protected $fillable = ['solicitacao_caixa_id', 'dataFinalizado', 'NF', 'valorGasto', 'troco'];

    public function finalizacaoCaixa($request, $id ){
        $this->create([
            'solicitacao_caixa_id'=> intval($id),
            'dataFinalizado'=> date('Y-m-d'),
            'NF' => $request->numeroNF,
            'valorGasto' => floatval($request->valorGasto),
            'troco'=>floatval($request->troco),

        ]);
    }
}

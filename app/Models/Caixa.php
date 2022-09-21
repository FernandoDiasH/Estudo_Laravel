<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{

    use HasFactory;

    protected $table = 'solicitacao_caixa';
    protected $fillable = [
        'dataSolicitada',
        'nome',
        'valorSolicitado',
        'setor_id',
        'descricao'
    ];

    public function caixaAberto(){
        return $this->where('situacao', 2)->count('situacao');
    }

    public function getCaixas(){
        return $this->join('setores', 'solicitacao_caixa.setor_id',  'setores.id')
                    ->select('solicitacao_caixa.id',
                            'solicitacao_caixa.dataSolicitada',
                            'solicitacao_caixa.nome',
                            'setores.setor',
                            'solicitacao_caixa.descricao',
                            'solicitacao_caixa.valorSolicitado'
                            )->where('solicitacao_caixa.situacao', 2)->orderBy('dataSolicitada', 'asc')->get();
    }

    public function getCaixa($id){
        return $this->join('setores', 'solicitacao_caixa.setor_id',  'setores.id')->find($id);
    }

    public function atualizarSituacao($id){
        return $this->where('id', $id)->update(['situacao'=> 1]);
    }

    public function getNomeCaixa($nome){
       return $this->where('nome', 'like','%'. $nome. '%')->get();
    }

}


//SELECT caixa.dataSolicitada, caixa.nome, setores.setor, caixa.descricao, caixa.valorSolicitado from solicitacao_caixa as caixa inner JOIN setores on caixa.setor_id = setores.id

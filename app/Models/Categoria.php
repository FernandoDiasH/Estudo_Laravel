<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table ='categoria';
    protected $fillable = ['categorias'];


    public function getCategorias()
    {
        return $this->select('id', 'categorias')->orderby('id', 'asc')->get();
    }

    public function deletarCategoria($id){
        $setor = $this->find($id);
        $setor->delete();
    }

    public function getCategoria($id){
        return $this->find($id);
    }

    public function updateCategoria($id, $setor){
        $this->where('id', $id)->update(['categorias'=>$setor]);
    }
}

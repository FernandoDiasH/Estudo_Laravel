<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

   protected $table = 'fornecedor';
   protected $fillable =['fornecedores'];


   public function getSuppliers()
   {
       return $this->select('id', 'fornecedores')->orderBy('fornecedores', 'asc')->get();
   }

   public function deletarFornecedor($id){
    $setor = $this->find($id);
    $setor->delete();
    }

    public function getFornecedor($id){
        return $this->find($id);
    }

    public function updateFornecedor($id, $setor){
        $this->where('id', $id)->update(['fornecedores'=>$setor]);
    }


}

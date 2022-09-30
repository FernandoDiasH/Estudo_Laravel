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
       return $this->paginate(10);
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

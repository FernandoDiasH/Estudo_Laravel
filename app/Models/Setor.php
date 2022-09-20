<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'setores';
    protected $fillable = ['setor'];

    public function getSetores()
    {
        return $this->select('id', 'setor')->orderby('id', 'asc')->get();
    }

    public function getSetor($id){
        return $this->find($id);
    }

    public function deletarSetor($id){
        $setor = $this->find($id);
        $setor->delete();
    }

    public function updateSetor($id, $setor){
        $this->where('id', $id)->update(['setor'=>$setor]);
    }

}

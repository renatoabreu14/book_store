<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    //
    protected $fillable = ['titulo', 'paginas', 'autor', 'editora_id', 'genero_id'];

    public function genero(){
        return $this->belongsTo('App\Genero');
    }

    public function editora(){
        return $this->belongsTo('App\Editora');
    }
}

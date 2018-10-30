<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //
    protected $fillable = ['descricao'];

    public function livros(){
        return $this->hasMany('App\Livro');
    }
}

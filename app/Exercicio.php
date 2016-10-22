<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function treinos()
    {
        return $this->belongsToMany(Treino::class);
    }
}

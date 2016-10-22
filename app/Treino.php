<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    public function exercicios()
    {
        return $this->belongsToMany(Exercicio::class);
    }

    public function usuarios()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

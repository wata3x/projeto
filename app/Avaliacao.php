<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    public function usuarios()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

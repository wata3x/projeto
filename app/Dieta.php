<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }
}

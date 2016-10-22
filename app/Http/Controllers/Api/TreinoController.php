<?php

namespace App\Http\Controllers\Api;

use App\Treino;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TreinoController extends Controller
{
    public function index()
    {
        return Auth::User()->treinos;
    }

    public function show($id)
    {
        //$treino = Treino::with('exercicios')->take(-1)->get();
        //return Treino::with('exercicios')->find($id);
        //return User::with('treinos','dietas')->find($id);

        return Treino::find($id)->exercicios;
    }
}

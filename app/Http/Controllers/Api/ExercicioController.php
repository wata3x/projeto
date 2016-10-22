<?php

namespace App\Http\Controllers\Api;

use App\Exercicio;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExercicioController extends Controller
{
    public function index()
    {
        return Exercicio::all();

    }

    public function show($id)
    {
        return Exercicio::find($id);
    }
}

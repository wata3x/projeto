<?php

namespace App\Http\Controllers\Api;

use App\Avaliacao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AvaliacaoController extends Controller
{
    public function index()
    {
        return Auth::User()->avaliacoes;

    }

    public function show($id)
    {
        return Avaliacao::find($id);
    }
}

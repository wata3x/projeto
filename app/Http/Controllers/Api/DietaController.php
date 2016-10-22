<?php

namespace App\Http\Controllers\Api;

use App\Dieta;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DietaController extends Controller
{
    public function index()
    {
        return Auth::User()->dietas;

    }

    public function show($id)
    {
        return Dieta::find($id);
    }
}

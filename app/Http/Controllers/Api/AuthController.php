<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        try{
            $token = JWTAuth::attempt($credenciais);
        }catch (JWTException $ex){
            return response()->json(['error' => 'nao_foi_possivel_criar_token'], 500);
        }

        if (!$token){
            return response()->json(['error' => 'credenciais_invalidas'], 401);
        }

        return response()->json(compact('token'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Avaliacao;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

class AvaliacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $avaliacoes = Avaliacao::all();
        return view('admin.avaliacoes.index', compact('avaliacoes'));
    }

    public function create()
    {
        $avaliacao = Avaliacao::all();
        $usuarios = User::all();
        return view('admin.avaliacoes.create')->withAvaliacoes($avaliacao)->withUsuarios($usuarios);
    }

    public function store(Request $request)
    {

        $avaliacao = new Avaliacao();
        $avaliacao->nome = $request->nome;
        $avaliacao->descricao = $request->descricao;
        $avaliacao->peso = $request->peso;
        $avaliacao->altura = $request->altura;
        $avaliacao->user_id = $request->usuario_id;
        $avaliacao->save();

        Session::flash('mensagem_sucesso', 'Avaliação cadastrada com sucesso!');

        return Redirect::to('admin/avaliacoes/create');
    }

    public function show($id)
    {
        $avaliacao = Avaliacao::find($id);
        return view('admin.avaliacoes.show', compact('avaliacao'));

    }
}

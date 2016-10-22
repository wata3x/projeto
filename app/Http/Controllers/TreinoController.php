<?php

namespace App\Http\Controllers;

use App\Exercicio;
use App\Treino;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

class TreinoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treinos = Treino::all();
        return view('admin.treinos.index', compact('treinos'));
    }

    public function create()
    {
        $exercicios = Exercicio::all();
        $usuarios = User::all();
        return view('admin.treinos.create')->withUsuarios($usuarios)->withExercicios($exercicios);
    }

    public function store(Request $request)
    {
        $treino = new Treino();
        $treino->nome = $request->nome;
        $treino->user_id = $request->usuario_id;
        $treino->save();

        $treino->exercicios()->sync($request->exercicios, false);

        Session::flash('mensagem_sucesso', 'Treino cadastrado com sucesso!');

        return Redirect::to('admin/treinos/create');
    }

    public function show($id)
    {
        $treino = Treino::findOrFail($id);
        return view('admin.treinos.show', compact('treino'));

    }

    public function destroy($id)
    {
        Treino::findOrFail($id)->delete();

        Session::flash('mensagem_sucesso', 'Treino deletado com sucesso!');

        return Redirect::to('admin/treinos');
    }

    public function edit($id)
    {
        $treino = Treino::findOrFail($id);
        $usuarios = User::all();
        $exercicios = Exercicio::all();
        return view('admin.treinos.create', ['treino' => $treino, 'exercicios' => $exercicios], ['usuarios' => $usuarios]);
    }

    public function update($id, Request $request)
    {
        $treino = Treino::findOrFail($id);
        $treino->nome = $request->nome;
        $treino->user_id = $request->usuario_id;
        $treino->save();

        $treino->exercicios()->sync($request->exercicios, false);

        Session::flash('mensagem_sucesso', 'Treino atualizado com sucesso!');

        return Redirect::to('admin/treinos/create');
    }
}

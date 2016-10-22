<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Exercicio;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Session;

class ExercicioController extends Controller
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
        $exercicios = Exercicio::all();
        return view('admin.exercicios.index', compact('exercicios'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.exercicios.create')->withCategorias($categorias);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
           'nome' => 'required:max:255',
           'descricao' => 'required:max:255',
           'categoria_id' => 'required|integer'
        ));
        $exercicio = new Exercicio();
        $exercicio->nome = $request->nome;
        $exercicio->descricao = $request->descricao;
        $exercicio->categoria_id = $request->categoria_id;

        //salvar imagem
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $filename = time() . '.' . $imagem->getClientOriginalExtension();
            $location = public_path('imagens/' . $filename);
            Image::make($imagem)->resize(256, 256)->save($location);

            $exercicio->imagem = $filename;
        }

        $exercicio->save();

        Session::flash('mensagem_sucesso', 'Exercicio cadastrado com sucesso!');

        return Redirect::to('admin/exercicios/create');
    }

    public function show($id)
    {
        $exercicio = Exercicio::find($id);
        return view('admin.exercicios.show', compact('exercicio'));

    }

    public function destroy($id)
    {
        Exercicio::findOrFail($id)->delete();

        Session::flash('mensagem_sucesso', 'Exercicio deletado com sucesso!');

        return Redirect::to('admin/exercicios');
    }

    public function edit($id)
    {
        $exercicio = Exercicio::findOrFail($id);
        $categorias = Categoria::all();
        return view('admin.exercicios.create', ['exercicio' => $exercicio], ['categorias' => $categorias]);
    }

    public function update($id, Request $request)
    {
        $exercicio = Exercicio::findOrFail($id);
        $exercicio->nome = $request->nome;
        $exercicio->descricao = $request->descricao;
        $exercicio->categoria_id = $request->categoria_id;
        $exercicio->save();

        Session::flash('mensagem_sucesso', 'Exercicio atualizado com sucesso!');

        return Redirect::to('admin/exercicios/'.$exercicio->id.'/edit');
    }

}

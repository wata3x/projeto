<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

class CategoriaController extends Controller
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
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->save();

        Session::flash('mensagem_sucesso', 'Categoria cadastrada com sucesso!');

        return Redirect::to('admin/categorias/create');
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.categorias.show', compact('categoria'));

    }

    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();

        Session::flash('mensagem_sucesso', 'Categoria deletada com sucesso!');

        return Redirect::to('admin/categorias');
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.create', ['categoria' => $categoria]);
    }

    public function update($id, Request $request)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());

        Session::flash('mensagem_sucesso', 'Categoria atualizada com sucesso!');

        return Redirect::to('admin/categorias/'.$categoria->id.'/edit');
    }

}

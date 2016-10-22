@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Categorias
                        <a class="pull-right" href="{{ url('admin/categorias/create') }}">Criar Categoria</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-md-9">Nome</th>
                                <th class="col-md-3">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->nome }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm" href="categorias/{{$categoria->id}}/show">Mostrar</a>
                                        <a class="btn btn-default btn-sm" href="categorias/{{$categoria->id}}/edit">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url'=> '/admin/categorias/'.$categoria->id, 'style' => 'display: inline;']) !!}
                                        <button type="submit" class="btn btn-default btn-sm">Excluir</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

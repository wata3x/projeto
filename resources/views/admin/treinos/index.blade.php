@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Treinos
                        <a class="pull-right" href="{{ url('admin/treinos/create') }}">Criar Treino</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-md-5">Nome</th>
                                <th class="col-md-4">Usuário</th>
                                <th class="col-md-3">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($treinos as $treino)
                                <tr>
                                    <td>{{ $treino->nome }}</td>
                                    <td>{{ $treino->usuarios->name }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm" href="treinos/{{$treino->id}}/show">Mostrar</a>
                                        <a class="btn btn-default btn-sm" href="treinos/{{$treino->id}}/edit">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url'=> '/admin/treinos/'.$treino->id, 'style' => 'display: inline;']) !!}
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


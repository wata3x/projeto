@extends('layouts.app')

@section('content')
    {{--<div class="container">
        <div class="pull-left">
            <h1 class="title">Usuários</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/admin/usuarios/create') }}">Criar Usuário</a>
        </div>


        <table class="table">
            <thead>
            <tr>
                <th class="col-md-2">Nome</th>
                <th class="col-md-4">Email</th>
                <th class="col-md-3">Roles</th>
                <th class="col-md-3">Ações</th>
            </tr>
            </thead>

            <tbody>
            @forelse($usuarios as $usuario)
                <tr>
                    <td >{{ $usuario->name }}</td>
                    <td >{{ $usuario->email }}</td>
                    @foreach($usuario->roles as $role)
                        <td>{{ $role->display_name }}</td>
                    @endforeach
                    <td>
                        <a class="btn btn-info" href="">Mostrar</a>
                        <a class="btn btn-primary" href="">Editar</a>
                        <a class="btn btn-danger" href="">Deletar</a>
                    </td>

                </tr>

            <tbody>

            @empty
                <p>Nenhum usuario cadastrado</p>
            @endforelse
        </table>



    </div>--}}

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Usuários
                        <a class="pull-right" href="{{ url('admin/usuarios/create') }}">Criar Usuário</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-md-2">Nome</th>
                                <th class="col-md-4">Email</th>
                                <th class="col-md-3">Roles</th>
                                <th class="col-md-3">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    @foreach($usuario->roles as $role)
                                        <td>{{ $role->display_name }}</td>
                                    @endforeach
                                    <td>
                                        <a class="btn btn-default btn-sm" href="usuarios/{{$usuario->id}}/show">Mostrar</a>
                                        <a class="btn btn-default btn-sm" href="usuarios/{{$usuario->id}}/edit">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url'=> '/admin/usuarios/'.$usuario->id, 'style' => 'display: inline;']) !!}
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

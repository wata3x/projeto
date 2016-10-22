@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detalhes do Usuário
                        <a class="pull-right" href="{{ url('admin/usuarios') }}">Voltar</a>
                    </div>

                    <div class="panel-body">

                        {!! Form::open(['url' => 'admin/usuarios']) !!}

                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $usuario->name}}
                        </div>

                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->email}}
                        </div>

                        <div class="form-group">
                            <strong>Role:</strong>
                            @foreach($usuario->roles as $role)
                                {{ $role->display_name }}
                            @endforeach
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe os dados do usuário abaixo
                    <a class="pull-right" href="{{ url('admin/usuarios') }}">Listagem de Usuários</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    @if(Request::is('*/edit'))
                        {!! Form::model($usuario, ['method' => 'PATCH', 'url' => 'admin/usuarios/'.$usuario->id]) !!}
                    @else
                        {!! Form::open(['url' => 'admin/usuarios']) !!}
                    @endif

                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'name', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Nome']) !!}

                    {!! Form::label('email', 'Email') !!}
                    {!! Form::input('email', 'email', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Email']) !!}

                    {!! Form::label('password', 'Password') !!}
                    {!! Form::input('password', 'password', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Password']) !!}

                    {!! Form::label('roles', 'Roles') !!}
                    <select class="form-control js-example-basic-multiple" name="roles[]" multiple="multiple">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>

                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

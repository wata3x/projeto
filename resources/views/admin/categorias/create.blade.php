@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe os dados da categoria abaixo
                        <a class="pull-right" href="{{ url('admin/categorias') }}">Listagem de Categorias</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        @if(Request::is('*/edit'))
                            {!! Form::model($categoria, ['method' => 'PATCH', 'url' => 'admin/categorias/'.$categoria->id]) !!}
                        @else
                            {!! Form::open(['url' => 'admin/categorias']) !!}
                        @endif

                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Nome']) !!}

                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
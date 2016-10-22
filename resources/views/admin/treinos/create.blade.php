@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe os dados do treino abaixo
                        <a class="pull-right" href="{{ url('admin/treinos') }}">Listagem de Treinos</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        @if(Request::is('*/edit'))
                            {!! Form::model($treino, ['method' => 'PATCH', 'url' => 'admin/treinos/'.$treino->id]) !!}
                        @else
                            {!! Form::open(['url' => 'admin/treinos']) !!}
                        @endif

                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Nome']) !!}

                        {!! Form::label('usuario_id', 'Usuário') !!}
                        <select class="form-control js-example-basic-single" name="usuario_id">
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                            @endforeach
                        </select>


                        {!! Form::label('exercicio_id', 'Exercicio') !!}
                        <select class="form-control js-example-basic-multiple" name="exercicios[]" multiple="multiple">
                            @foreach($exercicios as $exercicio)
                               <option value="{{ $exercicio->id }}">{{ $exercicio->nome }}</option>
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

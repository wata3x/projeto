@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detalhes do Exercício
                        <a class="pull-right" href="{{ url('admin/exercicios') }}">Voltar</a>
                    </div>

                    <div class="panel-body">

                        {!! Form::open(['url' => 'admin/exercicios']) !!}

                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $exercicio->nome}}
                        </div>

                        <div class="form-group">
                            <strong>Descrição:</strong>
                            {{ $exercicio->descricao}}
                        </div>

                        <div class="form-group">
                            <strong>Imagem:</strong>
                            {{ $exercicio->imagem}}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detalhes da Avaliação
                        <a class="pull-right" href="{{ url('admin/avaliacoes') }}">Voltar</a>
                    </div>

                    <div class="panel-body">

                        {!! Form::open(['url' => 'admin/avaliacoes']) !!}

                        <div class="form-group">
                            <strong>Nome da avaliação:</strong>
                            {{ $avaliacao->nome}}
                        </div>

                        <div class="form-group">
                            <strong>Descrição:</strong>
                            {{ $avaliacao->descricao}}
                        </div>

                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $avaliacao->peso}}
                        </div>

                        <div class="form-group">
                            <strong>Altura:</strong>
                            {{ $avaliacao->altura}}
                        </div>

                        <div class="form-group">
                            <strong>Usuário:</strong>
                            {{ $avaliacao->usuarios->name }}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

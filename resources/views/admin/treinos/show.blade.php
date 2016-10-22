@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Detalhes do Treino
                    <a class="pull-right" href="{{ url('admin/treinos') }}">Voltar</a>
                </div>

                <div class="panel-body">

                    {!! Form::open(['url' => 'admin/treinos']) !!}

                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $treino->nome}}
                    </div>

                    <div class="form-group">
                        <strong>Usuario:</strong>
                        {{ $treino->usuarios->name }}
                    </div>

                    <div class="form-group">
                        <strong>Exercicios:</strong>
                        @foreach($treino->exercicios as $exercicio)
                            {{ $exercicio->nome}}
                        @endforeach

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

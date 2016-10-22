@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe os dados da avaliação abaixo
                    <a class="pull-right" href="{{ url('admin/avaliacoes') }}">Listagem de Avaliações</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    @if(Request::is('*/edit'))
                        {!! Form::model($avaliacao, ['method' => 'PATCH', 'url' => 'admin/avaliacoes/'.$avaliacao->id]) !!}
                    @else
                        {!! Form::open(['url' => 'admin/avaliacoes']) !!}
                    @endif

                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Nome']) !!}

                    {!! Form::label('descricao', 'Descrição') !!}
                    {!! Form::input('text', 'descricao', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Descrição']) !!}

                    {!! Form::label('peso', 'Peso') !!}
                    {!! Form::input('text', 'peso', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Peso']) !!}

                    {!! Form::label('altura', 'Altura') !!}
                    {!! Form::input('text', 'altura', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Altura']) !!}

                    {!! Form::label('usuario_id', 'Usuario') !!}
                        <select class="form-control js-example-basic-single" name="usuario_id">
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
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
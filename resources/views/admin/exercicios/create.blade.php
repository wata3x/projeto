@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe os dados do exercicio abaixo
                    <a class="pull-right" href="{{ url('admin/exercicios') }}">Listagem de Exercicios</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    @if(Request::is('*/edit'))
                        {!! Form::model($exercicio, ['method' => 'PATCH', 'url' => 'admin/exercicios/'.$exercicio->id]) !!}
                    @else
                        {!! Form::open(['url' => 'admin/exercicios', 'files' => 'true' ])!!}
                    @endif

                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Nome']) !!}

                    {!! Form::label('descricao', 'Descrição') !!}
                    {!! Form::input('text', 'descricao', null, ['class' => 'form-control', 'auto-focus', 'placeholder' => 'Descrição']) !!}

                    {!! Form::label('imagem', 'Enviar Imagem') !!}
                    {!! Form::file('imagem') !!}

                    {!! Form::label('categoria_id', 'Categoria') !!}
                        <select class="form-control" name="categoria_id">
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
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
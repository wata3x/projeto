@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-left">
            <h1 class="title">Detalhes da Categoria</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/admin/categorias') }}">Voltar</a>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {{ $categoria->nome}}
                </div>
            </div>
        </div>

    </div>
@endsection

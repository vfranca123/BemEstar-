@extends('layout.layout')
@section('content')
    @include('shared.flash')

    <h1 style="text-align: center; padding: 2%">Atividades Físicas</h1>

    <div class="container-xxl mt-3 vh-100 bigBox"
        style="width: 80%;margin-left:10%;Justify-content:flex-start;
    align-items: center;flex-direction: column;">
        <div class="demarcacoes">
            <h2>Data</h2>
            <h2>Nome</h2>
            <h2>Descrição</h2>
        </div>

        @foreach ($AtividadeFisica as $atividade_fisica)
            <div class="fileira">
                <h3>Data: {{ $atividade_fisica->created_at }}</h3>
                <h3>Nome: {{ $atividade_fisica->nome }}</h3>
                <h3>Descrição:{{ $atividade_fisica->descricao }}</h3>
            </div>
        @endforeach
    </div>
@endsection

@extends('layout.layout')
@section('content')
    @include('layout.nav')
    @include('shared.flash')

    <h1 class="text-center m-2">Atividades Físicas</h1>

    <div class="container d-flex  flex-column align-items-center mt-2 rounded-4"
        style="height: 80vh; background-color: #055b50;">
        
        <div class="container w-75 d-flex justify-content-between bg-light rounded-4 m-4 ">
            <h2>Data</h2>
            <h2>Nome</h2>
            <h2>Descrição</h2>
        </div>

        @foreach ($AtividadeFisica as $atividade_fisica)
            <div class="container w-75 d-flex justify-content-between m-2 text-light">
                <h3>Data: {{ $atividade_fisica->created_at }}</h3>
                <h3>Nome: {{ $atividade_fisica->nome }}</h3>
                <h3>Descrição: {{ $atividade_fisica->descricao }}</h3>
            </div>
        @endforeach
    </div>
@endsection



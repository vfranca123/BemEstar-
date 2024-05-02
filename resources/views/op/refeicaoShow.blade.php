@extends('layout.layout')
@section('content')
    @include('shared.flash')

    <h1 class="text-center m-2">Alimentação</h1>

    <div class="container-fluid d-flex flex-row ">
        @foreach ($refeicaos as $refeicao)
            <div class="col-md-3 m-2 shadow">

                <img src="{{ url("storage/{$refeicao->img}") }}" class="container-sm" alt="Imagem da Refeição">

                <p>Conteúdo:{{ $refeicao->conteudo }}</p>
                <p>Data:{{ $refeicao->created_at }}</p>


            </div>
        @endforeach
    </div>
@endsection

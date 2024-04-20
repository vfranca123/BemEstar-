@extends('layout.layout')
@section('content')
    @include('shared.flash')

    <h1 style="text-align: center; padding: 2%">Alimentação</h1>

    <div id="ShowRefeicoes">
        @foreach ($refeicaos as $refeicao)
            
            <div class="refeicoes">
                
                <img src="{{ url("storage/{$refeicao->imag}") }}" style="width:300px" alt="Imagem da Refeição">

                <p>Conteúdo:{{ $refeicao->conteudo }}</p>
                <p>Data:{{ $refeicao->created_at }}</p>
                
                
            </div>
        @endforeach
    </div>
@endsection


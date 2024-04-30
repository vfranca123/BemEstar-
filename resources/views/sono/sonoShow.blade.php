@extends('layout.layout')
@section('content')
    @include('shared.flash')

    <h1 style="text-align: center; padding: 2%">Atividades Físicas</h1>

    <div  class="container-xxl mt-3 vh-100 bigBox" style="width: 80%;margin-left:10%;Justify-content:flex-start;
    align-items: center;flex-direction: column;">
        
        <div class="demarcacoes" >
            <h2>Inicio</h2>
            <h2>Fim</h2>
            <h2>Qualidade</h2>
        </div>

        @foreach ($sonos as $sono)
            <div class="fileira">
                <h3>Inicio: {{ $sono->inicio }}</h3>
                <h3>Fim: {{ $sono->fim }}</h3>

                
                <div >
                    <h3>Qualidade:</h3>
                    @for ($i = 0; $i < $sono->avaliacao; $i++)
                        <i class="fa-regular fa-star" style="color: gold"></i>
                    @endfor
                </div>
                
            </div>
        @endforeach
    </div>
@endsection
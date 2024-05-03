@extends('layout.layout')
@section('content')
    @include('layout.nav')
    @include('shared.flash')

    <h1 class="text-center m-2">Sono</h1>

    <div class="container d-flex  flex-column align-items-center  mt-2 rounded-4"
        style="height: 80vh; background-color: #055b50;">

        <div class="container w-75 d-flex justify-content-between bg-light rounded-4 m-4 ">
            <h2>Inicio</h2>
            <h2>Fim</h2>
            <h2>Qualidade</h2>
        </div>

        @foreach ($sonos as $sono)
            <div class="container w-75 d-flex justify-content-between  m-2 text-light">
                <h3>Inicio: {{ $sono->inicio }}</h3>
                <h3>Fim: {{ $sono->fim }}</h3>


                <div>
                    <h3>Qualidade:</h3>
                    @for ($i = 0; $i < $sono->avaliacao; $i++)
                        <i class="fa-regular fa-star" style="color: gold"></i>
                    @endfor
                </div>

            </div>
        @endforeach
    </div>
@endsection

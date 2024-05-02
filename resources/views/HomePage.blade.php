@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    <div class="container-fluid d-flex row">
        <div class="container col-md-3 mt-5 align-items-center" style="text-align: center;">
            <div class="h-100 w-200" style="background-color: #c3c3c3;font-size: 150px;"><a href="{{ route('sono.index') }}"
                    class="fa-solid fa-bed" style="margin-top: 10%"></a></div>
            <h1>Sono</h1>
        </div>

        <div class="container col-md-3 mt-5 align-items-center" style="text-align: center;">
            <div class="h-100 w-200 " style="background-color: #c3c3c3;font-size: 150px;"><a
                    href="{{ route('refeicao.index') }}" class=" fa-solid fa-bowl-food "></a></div>
            <h1>alimentação</h1>
        </div>

        <div class="container col-md-3 mt-5 align-items-center" style="text-align: center;">
            <div class="h-100 w-200" style="background-color: #c3c3c3;font-size: 150px;"><a
                    href="{{ route('atividadeFisica.index') }}" class="fa-solid fa-bicycle" style="margin-top: 10%"></a>
            </div>
            <h1>Exercicios</h1>
        </div>
    </div>
@endsection

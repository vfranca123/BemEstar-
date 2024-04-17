@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    <div id="opcoes">
        <div class="op">
            <div class="cinza"><a href="#r" class="fa-solid fa-bed" style="margin-top: 10%"></a></div>
            <h1>Sono</h1>
        </div>

        <div class="op">
            <div class="cinza"><a href="{{route('refeicao.index')}}" class="fa-solid fa-bowl-food" style="margin-top: 10%"></a></div>
            <h1>alimentação</h1>
        </div>

        <div class="op">
            <div class="cinza"><a  href="#" class="fa-solid fa-bicycle" style="margin-top: 10%"></a></div>
            <h1>Atividade fisica</h1>
        </div>
    </div>
    

@endsection
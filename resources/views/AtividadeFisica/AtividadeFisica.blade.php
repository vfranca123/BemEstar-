@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')

    <h1 class="text-center">Exercicio</h1>
    <div class="container">
        <form action="{{ route('user.atividadeFisica.store', auth()->id()) }}" method="POST" class="form-label col-md-12  ">
            @csrf

            <h3 class="m-2">Nome:</h3>
            <div class="col-md-6 m-2">
                <input type="text" class="form-control " name="nome" placeholder="nome">
            </div>

            <h3 class="m-2">Inicio:</h3>
            <div class="col-md-6 m-2">
                <input type="text" class="form-control"name="inicio">
            </div>

            <h3 class="m-2">Fim:</h3>
            <div class="col-md-6 m-2">
                <input type="text" class="form-control" name="Fim">
            </div>

            <h3 class="m-2">Descrição:</h3>
            <div class="col-md-6 m-2">
                <input type="text" class="form-control " name='descricao'>
            </div>

            <button type="submit" class="btn btn-primary btn-lg OpButton col-md-1 align-self-center m-2 ">Enviar</button>
        </form>
    </div>
@endsection

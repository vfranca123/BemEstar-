@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')

    <h1 class="text-center">alimentação</h1>
    <div class="container ">
        <form enctype="multipart/form-data" action="{{ route('user.refeicao.store', auth()->id()) }}" method="POST"
            class="mt-3">
            @csrf

            <div class="mb-3 col-md-6">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="text" placeholder="alimentos">
            </div>

            <div class="mb-3 col-md-6">
                <label for="image" class="form-label">Inserir a imagem:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection

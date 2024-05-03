@extends('layout.layout')
@section('content')
    @include('layout.nav')
    @include('shared.flash ')
    @include('shared.flashError ')

    <h1 class="text-center m-2  ">Sono</h1>
    <div class="container ">
        <form action="{{ route('user.sono.store', auth()->id()) }}" method="POST" enctype="multipart/form-data"
            class=" col-md-12">
            @csrf

            <div class="col-md-6">
                <label for="inicio" class="form-label">inicio:</label>
                <input type="time" class="form-control" id="inicio" name="inicio">
            </div>

            <div class="col-md-6">
                <label for="fim" class="form-label">fim:</label>
                <input type="time" class="form-control" id="fim" name="fim">
            </div>

            <div class="col-md-6">
                <label for="avaliacao" class="form-label">avaliação:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="avaliacao" id="avaliacao1" value="1">
                    <label class="form-check-label" for="avaliacao1">1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="avaliacao" id="avaliacao2" value="2">
                    <label class="form-check-label" for="avaliacao2">2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="avaliacao" id="avaliacao3" value="3">
                    <label class="form-check-label" for="avaliacao3">3</label>
                </div>
            </div>

            <button type="submit" class=" btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection

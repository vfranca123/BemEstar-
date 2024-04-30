@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')
    <div id="display"> 
        <h1>Atividade fisica</h1>
        
            <form  action="{{route('user.atividadeFisica.store',auth()->id())}}" method="POST" class="container grayBox">
                @csrf
                
                <h3 class="m-2">Nome:</h3>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nome" placeholder="nome" >
                </div>

                <h3 class="m-2">Inicio:</h3>
                <div class="col-md-6">
                    <input  type="text" class="form-control"name="inicio" >
                </div>

                <h3 class="m-2">Fim:</h3>
                <div class="col-md-6">
                    <input  type="text" class="form-control" name="Fim" >
                </div>

                <h3 class="m-2">Descrição:</h3>
                <div class="col-md-6">
                    <input type="text" class="form-control " name='descricao'> 
                </div>     
                
                <button type="submit" class="btn btn-primary btn-lg OpButton col-md-1 align-self-center m-2 ">Enviar</button>
            </form>
        
    </div>

@endsection
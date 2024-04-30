@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')
    <div id="display"> 
        <h1>alimentação</h1>
        
            <form enctype="multipart/form-data" action="{{route('user.refeicao.store',auth()->id())}}" method="POST" class="container grayBox">
                @csrf
                
                <h3 class="m-4">Descrição:</h3>
                <div class=" col-md-6">
                    <input type="text" name="text" placeholder="alimentos" class="form-control ">
                </div> 
                    
                <h3 class="m-4">Inserir a imagem:</h3>
                <div class="col-md-4">
                    <input type="file" class="form-control " name="image">
                </div>

                <button type="submit" class="btn btn-primary btn-lg OpButton col-md-1 align-self-center ">Enviar</button>
            
            </form>
        
    </div>

@endsection
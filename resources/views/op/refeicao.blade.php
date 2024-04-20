@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')
    <div id="display"> 
        <h1>alimentação</h1>
        
            <form enctype="multipart/form-data" action="{{route('user.refeicao.store',auth()->id())}}" method="POST" id="grayBox">
                @csrf
                
                <p>Descrição:</p>
                <input type="text" name="text" placeholder="alimentos" >
                                
                <p>Inserir a imagem:</p>
                <input type="file" name="image">

                <input type="submit"  id="OpButton" value="enviar">
            
            </form>
        
    </div>

@endsection
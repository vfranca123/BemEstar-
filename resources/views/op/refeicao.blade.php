@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    <div id="display"> 
        <h1>alimentação</h1>
        
            <form action="{{route('user.refeicao.store',auth()->id())}}" method="POST" id="grayBox">
                @csrf
                
                <p>Descrição:</p>
                <input type="text" name="text" placeholder="alimentos" >
                <p>Data:</p>
                <input type="data" name="data" id="data" placeholder="dd/mm/yyyy">
                
                <p>Inserir a imagem:</p>
                <input type="file" name="image">

                <input type="submit"  id="OpButton" value="enviar">
            
            </form>
        
    </div>

@endsection
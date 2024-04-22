@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')
    <div id="display"> 
        <h1>alimentação</h1>
        
            <form  action="{{route('user.atividadeFisica.store',auth()->id())}}" method="POST" id="grayBox">
                @csrf
                
                <h3>Nome:</h3>
                <input type="text" name="nome" placeholder="nome" >
                                
                <h3>Inicio:</h3>
                <input  type="text" name="inicio" placeholder="dd/mm/yy">

                <h3>Fim:</h3>
                <input  type="text" name="Fim" placeholder="dd/mm/yy">

                <h3>Descrição:</h3>
                <input type="text" name='descricao'> 
                 
                <input type="submit"  id="OpButton" value="enviar">
            
            </form>
        
    </div>

@endsection
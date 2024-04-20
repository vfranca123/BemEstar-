@extends('layout.layout')
@section('content')
    @include('shared.flash ')
    @include('shared.flashError ')
    <div id="display"> 
        <h1>alimentação</h1>
        
            <form  action="{{route('user.atividadeFisica.store',auth()->id())}}" method="POST" id="grayBox">
                @csrf
                
                <p>Nome:</p>
                <input type="text" name="nome" placeholder="nome" >
                                
                <p>Inicio:</p>
                <input  type="text" name="inicio" placeholder="dd/mm/yy">

                <p>Fim:</p>
                <input  type="text" name="Fim" placeholder="dd/mm/yy">

                <p>Descrição:</p>
                <input type="text" name='descricao'> 
                 
                <input type="submit"  id="OpButton" value="enviar">
            
            </form>
        
    </div>

@endsection
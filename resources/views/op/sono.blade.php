@extends('layout.layout')
@section('content')
    <div id="display"> 
        <h1>alimentação</h1>
        
            <form action="" method="POST" id="grayBox">
                @csrf
                @method('put')
                <p>Descrição:</p>
                <input type="text" name="text" >
                <p>Data:</p>
                <input type="data" name="text" id="data" value="dd/mm/yyyy">
                
                <p>Inserir a imagem:</p>
                <input type="file" name="image">

                <input type="submit"  id="OpButton" value="enviar">
            
            </form>
        
    </div>

@endsection
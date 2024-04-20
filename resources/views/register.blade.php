@extends('layout.layout')

@section('content')

    <div id="bigBox">
        <form enctype="multipart/form-data" id="littleBox" action="{{ route('register.store') }}" method="POST">
            @csrf
            
            <p>Nome</p>
            <input type="text" name="nome" id="nome" placeholder="Gerivaldo">
            <hr>
            <p>Data de nascimento </p>
            <input type="date" name="date" id="date" placeholder="XX/dd/yyyy">
            <hr>
            <p>Endereço de email</p>
            <input type="email" name="email" id="email" placeholder="XXXXXXX@yyyyyyy">
            <hr>
            <p>Senha</p>
            <input type="password" name="password" id="password" placeholder="******">
            
            <input type="submit" id="blackBox" style="font-size: x-large" value="Criar uma conta "> 
        </form>
    </div>
    
@endsection
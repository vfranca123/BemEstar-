@extends('layout.layout')

@section('content')

    <div id="bigBox">
        <form id="littleBox" action="{{ route('register.store') }}" method="POST">
            @csrf
            <p>Nome</p>
            <input type="text" name="nome" id="nome">
            <hr>
            <p>Data de nascimento </p>
            <input type="date" name="date" id="date">
            <hr>
            <p>Endereço de email</p>
            <input type="email" name="email" id="email">
            <hr>
            <p>Senha</p>
            <input type="password" name="password" id="password">
            
            <input type="submit" id="blackBox" style="font-size: x-large" value="Criar uma conta "> 
        </form>
    </div>
    
@endsection
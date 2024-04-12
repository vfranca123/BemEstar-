@extends('layout.layout')

@section('content')
    @include('shared.flashError ')

    <form id="bigBox" action="{{route('login.authenticate')}}" method="post">
        @csrf
        <div id="littleBox">
            <p>endereço de email</p>
            <input type="email" name="email" id="email">
            <hr>
            <p>senha</p>
            <input type="password" name="password" id="password">
            
            <input type="submit" id="blackBox" style="font-size: x-large" value="entrar "> 
        </div>
    </form>
@endsection

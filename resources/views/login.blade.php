@extends('layout.layout')

@section('content')
    @include('shared.flashError ')

    <form id="bigBox" action="{{route('login.authenticate')}}" method="post">
        @csrf
        <div id="littleBox">
            <p>email:</p>
            <input type="email" name="email" id="email" placeholder="XXXXXXX@yyyyyyy" >
            <hr>
            <p>senha:</p>
            <input type="password" name="password" id="password"  placeholder="******">
            
            <input type="submit" id="blackBox" style="font-size: x-large;" value="entrar "> 
        </div>
    </form>
@endsection

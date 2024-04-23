@extends('layout.layout')

@section('content')
   <div class="BlueBox">
        @if ($controle===1)
            <h1>Moderador de Sono</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque molestiae eum numquam. Quia recusandae aut vel totam eveniet laboriosam blanditiis suscipit exercitationem asperiores, pariatur corrupti. Temporibus quas in consequuntur ducimus!</p>
            <a href="{{route('index')}}">voltar</a>
        @endif

        @if ($controle===2)
            <h1>Moderador de Atividades Físicas </h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque molestiae eum numquam. Quia recusandae aut vel totam eveniet laboriosam blanditiis suscipit exercitationem asperiores, pariatur corrupti. Temporibus quas in consequuntur ducimus!</p>
            <a href="{{route('index')}}" >voltar</a>
        @endif

        @if ($controle===3)
            <h1>Moderador de Humor</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque molestiae eum numquam. Quia recusandae aut vel totam eveniet laboriosam blanditiis suscipit exercitationem asperiores, pariatur corrupti. Temporibus quas in consequuntur ducimus!</p>
            <a href="{{route('index')}}">voltar</a>
        @endif

    </div>

@endsection
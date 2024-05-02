@extends('layout.layout')

@section('content')
    <div class="container-sm BlueBox m-4 p-5">
        @if ($controle === 1)
            <h1 class="m-2">Moderador de Sono</h1>
            <p class="fs-5 m-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque molestiae eum numquam. Quia
                recusandae aut vel totam eveniet laboriosam blanditiis suscipit exercitationem asperiores, pariatur
                corrupti. Temporibus quas in consequuntur ducimus!</p>
            <a class="btn btn-primary m-2 col-md-2" href="{{ route('index') }}">voltar<i
                    class="fa-solid fa-arrow-right"></i></a>
        @endif

        @if ($controle === 2)
            <h1 class="m-2">Moderador de Atividades Físicas </h1>
            <p class="fs-5 m-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque molestiae eum numquam. Quia
                recusandae aut vel totam eveniet laboriosam blanditiis suscipit exercitationem asperiores, pariatur
                corrupti. Temporibus quas in consequuntur ducimus!</p>
            <a class="btn btn-primary m-2 col-md-2" href="{{ route('index') }}">voltar<i
                    class="fa-solid fa-arrow-right"></i></a>
        @endif

        @if ($controle === 3)
            <h1 class="m-2">Moderador de Humor</h1>
            <p class="fs-5 m-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque molestiae eum numquam. Quia
                recusandae aut vel totam eveniet laboriosam blanditiis suscipit exercitationem asperiores, pariatur
                corrupti. Temporibus quas in consequuntur ducimus!</p>
            <a class="btn btn-primary m-2 col-md-2" href="{{ route('index') }}">voltar<i
                    class="fa-solid fa-arrow-right"></i></a>
        @endif

    </div>
@endsection

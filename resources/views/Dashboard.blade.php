@extends('layout.layout')

@section('content')
    
    @include('layout.nav')
    

    @include('shared.flash ')
    @include('shared.flashError ')


    <div class="container-md mt-5">
    <pre class="fs-5">
    Bem-estar é mais do que um site: é o seu guia para uma 
    vida plena. Aqui, você pode monitorar sua rotina de sono, 
    alimentação, atividade física e muito mais, tudo para 
    alcançar a melhor qualidade de vida possível.
    </pre>
    </div>

    <div class="container d-flex flex-column justify-content-center">

        <h1 class="align-self-center">Nossos serviços</h1>

        <div class="container-fluid BlueBox m-4 p-5 ">
            <h1 class="m-2"> Moderador de Sono</h1>
            <p class="fs-5 m-2">Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit. Consequat bibendum sit felis,<br>
                sollicitudin et. Nulla aliquet integer hac ac <br>
                morbi. <br></p>

            <a class="btn btn-primary m-2 col-md-2" href="{{ route('HumorInfo') }}">Saiba mais<i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="container-sm BlueBox m-4 p-5 ">
            <h1 class="m-2">Moderador de Atividades Físicas </h1>
            <p class="fs-5 m-2">Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit. Consequat bibendum sit felis,<br>
                sollicitudin et. Nulla aliquet integer hac ac <br>
                morbi. <br></p>


            <a class="btn btn-primary m-2 col-md-2" href="{{ route('HumorInfo') }}">Saiba mais<i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="container-sm BlueBox m-4 p-5">
            <h1 class="m-2">Moderador de Humor </h1>
            <p class="fs-5 m-2">Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit. Consequat bibendum sit felis,<br>
                sollicitudin et. Nulla aliquet integer hac ac <br>
                morbi. <br></p>

            <a class="btn btn-primary m-2 col-md-2" href="{{ route('HumorInfo') }}">Saiba mais<i
                    class="fa-solid fa-arrow-right"></i></a>

        </div>

        <div class="container-sm  m-4 p-5 bg-blue w-75 d-flex rounded-pill " style="background-color:#a2e0ed">
            <div class="">
                <h1  class="m-4 ml-4" style="color:#3f74ff">Sobre <br>Nos</h1>
            </div>
            <p class="fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                elit. Eget duis mi nunc bibendum. Tellus elementum <br>
                SOBRE
                NÓS
                nec lorem eget dictumst. Risus in gravida eu, enim <br>
                lorem. Sed consequat ut suspendisse eros. Nunc nunc <br>
                accumsan, viverra enim. Mi. <br>
            </p>
        </div>

    </div>
@endsection

@extends('layout.layout')

@section('content')

@include('shared.flash ')


    <div id="text">
        <p>Bem-estar é mais do que um site: é o seu guia para uma 
            vida plena. Aqui, você pode monitorar sua rotina de sono, 
            alimentação, atividade física e muito mais, tudo para 
            alcançar a melhor qualidade de vida possível.</p>
    </div>

    <div id="servicos">
        <h1>Nossos serviçoes</h1>
        
        <div class="BlueBox">
            <h1> Moderador de Sono</h1>
            <p>Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit. Consequat bibendum sit felis,<br> 
                sollicitudin et. Nulla aliquet integer hac ac <br>
                morbi. <br></p>
            
            <button>Saiba mais -></button>
        </div>
        <div class="BlueBox">
            <h1>Moderador de Atividades Físicas </h1>
            <p>Lorem ipsum dolor sit amet, consectetur <br>
                adipiscing elit. Consequat bibendum sit felis,<br> 
                sollicitudin et. Nulla aliquet integer hac ac <br>
                morbi. <br></p>
            
            <button>Saiba mais -></button>
        </div>
        <div class="BlueBox">
            <h1>Moderador de Humor </h1>
                <p>Lorem ipsum dolor sit amet, consectetur <br>
                    adipiscing elit. Consequat bibendum sit felis,<br> 
                    sollicitudin et. Nulla aliquet integer hac ac <br>
                    morbi. <br></p>
            
                
        </div>

        <div id="sobreNos">
            <div id="boxWhite"> <h1 style="padding: 25%; padding-left:30%;color:#3f74ff">Sobre <br>Nos</h1></div>
            <p >Lorem ipsum dolor sit amet, consectetur adipiscing <br>
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
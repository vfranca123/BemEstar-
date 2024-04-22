<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>BemEstar app</title>
</head>

<body>
    <div id="navBar">
        

       
            
            @auth()
                <a href="{{route('HomePage')}}"id="title"> Bem Estar</a>
                <ul id="PagsNavBar">
                    <li > <a href="{{route('sono.show',auth()->id())}}">Sono</a></li>
                    <li ><a href="{{route('refeicao.show',auth()->id())}}">alimentação</a></li>
                    <li ><a href="{{route('atividadeFisica.show',auth()->id())}}">Atividade Fisica</a></li>
                    <li ><a href="{{ route('logout') }}" style="color: red">Sair</a></li>
                    <li> <a href="{{route('userShow.index',auth()->id())}}"class="fa-solid fa-user" style="font-size: 50px"> </a> </li>
                </ul>
            @endauth

            @guest
               
               
                @if ($controle ===1)
                
                    <a href="{{route('index')}}"id="title"> Bem Estar</a>
                    <ul id="PagsNavBar">
                        <li><a href="{{ route('login.index') }}"><button>Entrar</button></a></li>
                    </ul>
                    
                       
                    @else
                    <a href="{{route('index')}}"id="title"> Bem Estar</a>
                    <ul id="PagsNavBar">
                        <li><a href="{{ route('register.index') }}"><button>Cadastrar</button></a></li>        
                    </ul>
                @endif
                
            @endguest
       

       
    </div>

   
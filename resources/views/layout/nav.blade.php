<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>BemEstar app</title>
</head>

<body>
    <div id="navBar">
        <a href="{{route('index')}}"id="title"> Bem Estar</a>

        <ul id="PagsNavBar">
            
            @auth()
                <li > <a href="#">Sono</a></li>
                <li ><a href="">Humor</a></li>
                <li ><a href="">Atividade Fisica</a></li>
                <li ><a href="{{ route('logout') }}" style="color: red">Sair</a></li>
                <li> <a href="#"class="fa-solid fa-user" style="font-size: 50px"> </a> </li>
                
            @endauth

            @guest
               
               
                @if ($controle ===1)
                    <li><a href="{{ route('login.index') }}"><button>Entrar</button></a></li>

                    
                       
                    @else
                    <li><a href="{{ route('register.index') }}"><button>Cadastrar</button></a></li>        
                    
                @endif
                
            @endguest
       </ul>

       
    </div>

   
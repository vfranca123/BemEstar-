<nav class="navbar vh-20 p-4 " style="background-color: #e3f2fd;">
    @auth()
        <div class="container-fluid ">
            <a class="navbar-brand " href="{{ route('HomePage') }}">
                <h1 style="color: #055b50;">BemEstar </h1>
            </a>
            <a class="nav-link  " href="{{ route('sono.show', auth()->id()) }}">sono</a>
            <a class="nav-link  " href="{{ route('refeicao.show', auth()->id()) }}">alimentação</a>
            <a class="nav-link  " href="{{ route('atividadeFisica.show', auth()->id()) }}">exercicios</a>
            <a class="nav-link  " href="{{ route('logout') }}"> <button type="button" class="btn btn-danger">Sair
                </button></a>
            <a class="nav-link  " href="{{ route('userShow.index', auth()->id()) }}">
                <h1 class="fa-solid fa-user "></h1>
            </a>

        </div>
    @endauth

    @guest

        <a class="navbar-brand " href="{{ route('index') }}">
            <h1 style="color: #055b50;">BemEstar </h1>
        </a>

        <a class="nav-link  " href="{{ route('login.index') }}"><button type="button"
                class="btn btn-primary">Entrar</button></a>

    @endguest
</nav>

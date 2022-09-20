@yield('menu')
<nav class="navbar navbar-expand-lg mt-3 ms-3">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">Home</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solicitação</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('caixa') }}">Soliciatação Caixa</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastrar</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('setor') }}">Cadastrar Setor</a></li>
                        <li><a class="dropdown-item" href="{{ route('categoria') }}">Cadastrar Categoria</a></li>
                        <li><a class="dropdown-item" href="{{ route('fornecedor') }}">Cadastrar Fornecedor</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

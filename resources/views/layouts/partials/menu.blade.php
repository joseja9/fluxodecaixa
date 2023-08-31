<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">FLUXO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <span class="nav-link">
                    Olá, {{ Auth::user()->name }}
                </span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('lancamento.index') }}">
                    Lançamentos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('centro.index') }}">
                    Centro de Custos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    Sair
                </a>
            </li>
        </ul>
    </div>
</nav>

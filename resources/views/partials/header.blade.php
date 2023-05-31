<header id="header">
    <div class="container d-flex justify-content-between align-items-center">
        <img src="{{ Vite::asset('resources/img/pizza-hut.png') }}" alt="Pizza Hut">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pizzas.index') }}">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>

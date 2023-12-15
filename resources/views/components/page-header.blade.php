<!-- Page Header Start -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Bosh sahifa</a>
                </li>
                
            </ul>
            @auth
                <div class="d-grid gap-2 d-md-block">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-dark mr-3 d-none d-lg-block">Chiqish</button>
                    </form>
                </div>
            @else
                <a class="btn btn-primary" href="{{ route('login') }}" type="button">Log In</a>
            @endauth
        </div>
    </div>
</nav>
<!-- Page Header End -->

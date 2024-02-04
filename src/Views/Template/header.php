<body>
    <header class='mb-5'>
        <nav class="navbar bg-body-secondary">
            <div class="container-fluid">
                <a class="navbar-brand">BIBLIO Site</a>
                <div class="d-flex gap-2 list-unstyled align-items-end ">
                        <a class="d-flex btn btn-dark" role="search" href="?controller=IndexController&method=index">Accueil</a>
                </div>
                <div class="d-flex gap-2 list-unstyled align-items-center justify-content-center">
                        <a class="d-flex btn btn-dark" role="search" href="?controller=LivreController&method=livre">Livres</a>
                </div>
                <div class="d-flex gap-2 list-unstyled align-items-center justify-content-center">
                        <a class="d-flex btn btn-dark" role="search" href="?controller=AuteurController&method=auteurs">Auteurs</a>
                </div>
                <div class="d-flex gap-2 list-unstyled align-items-center justify-content-center">
                        <a class="d-flex btn btn-dark" role="search" href="?controller=GenreController&method=genre">Genres</a>
                </div>
            </div>
        </nav>
    </header>
    <main class='container'>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid ">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse justify-content-start align-items-start"
            id="navbarNavAltMarkup"
        >
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route("home")}}"
                >Home</a
            >
            <a class="nav-link active" aria-current="page" href="{{route("articles")}}"
                >Articoli</a
            >
            </div>
        </div>
    </div>
</nav>
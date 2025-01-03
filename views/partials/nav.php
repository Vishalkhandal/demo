<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Demo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link <?= urlIs('/') ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= urlIs('/about') ? 'active' : '' ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= urlIs('/notes') ? 'active' : '' ?>" href="/notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= urlIs('/contact') ? 'active' : '' ?>" href="/contact">Contact</a>
                </li>
            </ul>

            <form class="d-flex mb-2 mb-md-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <div class="text-end">
                <?php if ($_SESSION['user'] ?? false) : ?>
                    <p>User</p>
                <?php else : ?>
                    <a href="/login" class="btn btn-outline-light me-2">Login</a>
                    <a href="/register" class="btn btn-warning">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
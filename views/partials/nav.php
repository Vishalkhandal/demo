<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <?php if ($_SERVER['HTTP_HOST'] === "localhost"): ?>
            <a class="navbar-brand" href=<?= URL_ROOT . "/" ?>>Demo</a>
        <?php else: ?>
            <a class="navbar-brand" href="/">Demo</a>
        <?php endif; ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <?php if ($_SERVER['HTTP_HOST'] === "localhost"): ?>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === URL_ROOT . '/' ? 'active' : '' ?>" aria-current="page" href=<?= URL_ROOT . "/" ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === URL_ROOT . '/about' ? 'active' : '' ?>" href=<?= URL_ROOT . "/about" ?>>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === URL_ROOT . '/notes' ? 'active' : '' ?>" href=<?= URL_ROOT . "/notes" ?>>Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === URL_ROOT . '/contact' ? 'active' : '' ?>" href=<?= URL_ROOT . "/contact" ?>>Contact</a>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === '/about' ? 'active' : '' ?>" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === '/notes' ? 'active' : '' ?>" href="/notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] === '/contact' ? 'active' : '' ?>" href="/contact">Contact</a>
                    </li>
                </ul>
            <?php endif; ?>

            <form class="d-flex mb-2 mb-md-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</nav>
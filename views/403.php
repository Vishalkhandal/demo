<?php

require('partials/header.php');
require('partials/nav.php');
?>

<main class="container">
    <div class="d-flex h-100 text-center justify-content-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <main class="px-3">
                <h1 class="display-3">403</h1>
                <h2 class="display-6 text-uppercase">ERROR</h2>
                <p class="lead">You are note authorized to view this page.</p>
                <p class="lead">
                    <a href="/" class="btn btn-lg btn-dark fw-bold">Back to Home</a>
                </p>
            </main>
        </div>
    </div>
</main>

<?php
require('partials/footer.php');
?>
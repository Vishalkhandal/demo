<?php

require base_path('views/partials/header.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1 class="mb-4">This is Notes page.</h1>
        <a class="mb-4" href="/notes">Go Back...</a>
        <p>
            <li><?= htmlspecialchars($note['body']); ?></li>
        </p>
        <form class="mt-4" method="POST">
            <input type="hidden" name="_method" value="DELETE" />
            <input type="hidden" name="id" value=<?= $note['id'] ?> />
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>

    </div>
</main>

<?php
require base_path('views/partials/footer.php');
?>
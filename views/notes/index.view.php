<?php

// require(__DIR__ . '/../partials/header.php');
require base_path('views/partials/header.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1 class="mb-4">This is Notes page.</h1>
        <ul class="mb-4">
            <?php foreach ($notes as $note): ?>
                <a href=<?= "/note?id=" . $note['id'] ?>">
                    <li><?= htmlspecialchars($note['body']); ?></li>
                </a>
            <?php endforeach; ?>
        </ul>

        <p>
            <a href="/notes/create">Create Note</a>
        </p>
    </div>
</main>

<?php
require base_path('views/partials/footer.php');
?>
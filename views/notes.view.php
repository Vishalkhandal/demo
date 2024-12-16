<?php

require('partials/header.php');
require('partials/nav.php');
require('partials/banner.php');
?>

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1 class="mb-4">This is Notes page.</h1>
        <ul>
            <?php foreach ($notes as $note): ?>
                <li><?php $note['body']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php
require('partials/footer.php');
?>
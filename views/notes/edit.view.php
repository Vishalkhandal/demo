<?php


require base_path('views/partials/header.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <div class="mb-3">
                <label for="body" class="form-label">Description</label>
                <textarea class="form-control" id="body" name="body" rows="3" placeholder="Here's an idea for a note...">
                    <?= $note['body'] ?>
                </textarea>
                <?php if (isset($errors['body'])): ?>
                    <p class="text-danger"><?= $errors['body'];  ?></p>
                <?php endif; ?>
            </div>
            <div>
                <button type="submit" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</main>

<?php
require base_path('views/partials/footer.php');
?>
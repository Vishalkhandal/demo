<?php

require base_path('views/partials/header.php');
require base_path('views/partials/nav.php');

?>


<main class="container form-signin">
    <form action="/register" method="POST">
        <img class="mb-4" src="../../public/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Register for a new account</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <label for="email">Email address</label>
        </div>
        <?php if (isset($errors['email'])): ?>
            <p class="text-danger"><?= $errors['email'] ?></p>
        <?php endif; ?>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
        <?php if (isset($errors['password'])): ?>
            <p class="text-danger"><?= $errors['password'] ?></p>
        <?php endif; ?>
        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>

    </form>
</main>


<?php
require base_path('views/partials/footer.php');
?>
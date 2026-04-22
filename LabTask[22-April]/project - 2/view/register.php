<form method="POST">
    Username: <input type="text" name="username" value="<?= $old['username'] ?? '' ?>">
    <span><?= $errors['username'] ?? '' ?></span><br>

    Email: <input type="text" name="email" value="<?= $old['email'] ?? '' ?>">
    <span><?= $errors['email'] ?? '' ?></span><br>

    Password: <input type="password" name="password">
    <span><?= $errors['password'] ?? '' ?></span><br>

    Confirm Password: <input type="password" name="confirm_password">
    <span><?= $errors['confirm_password'] ?? '' ?></span><br>

    <button type="submit">Register</button>
</form>
<a href="index.php?page=login">Login</a>
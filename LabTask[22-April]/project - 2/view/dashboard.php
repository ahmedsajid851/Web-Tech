<?php
$theme = $_COOKIE['theme'] ?? 'light';
?>

<body style="background-color: <?= $theme == 'dark' ? '#333' : '#fff' ?>; color: <?= $theme == 'dark' ? '#fff' : '#000' ?>">
    <h2>Welcome, <?= $_SESSION['user'] ?></h2>
    <p>Login Time: <?= $_SESSION['login_time'] ?></p>

    <a href="index.php?page=settings">Settings</a><br>
    <a href="index.php?page=logout">Logout</a>
</body>
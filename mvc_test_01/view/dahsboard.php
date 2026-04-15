<?php
    session_start();
    $username = $_SESSION['username'] ?? "";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to your dashboard, <?php echo "$username"; ?></h1>
    <p>This is your dashboard.</p>
    <a href="../view/login.php">Logout</a>
    <?php
        session_destroy(); //destroy session, it will remove all session variables and end the session. It is used to log out a user or to clear session data when it is no longer needed.
    ?>
</body>
</html>
<?php 
session_start();
$username_error= $_SESSION['username_error'] ?? "";
$password_error = $_SESSION['password_error'] ?? "";
$login_error = $_SESSION['login_error'] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
</head>
<body>
    <h2>Login</h2>
    <h1 style="color:red"><?php echo "$login_error"; session_destroy() ?></h1>
    <form method="post" action="../controller/loginvalidation.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Enter username" required></td>
                <td style="color:red"><?php echo "$username_error"; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Enter password" required></td>
                <td style="color:red"><?php echo "$password_error"; ?></td>

            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
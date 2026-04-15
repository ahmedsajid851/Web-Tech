<?php 
session_start();

$username = $_POST['username'] ?? "";
$name = $_POST['name'] ?? "";
$email = $_POST['email'] ?? "";
$phone = $_POST['phone'] ?? "";

$username_error= $_SESSION['username_error'] ?? "";
$name_error= $_SESSION['name_error'] ?? "";
$email_error = $_SESSION['email_error'] ?? "";
$phone_error = $_SESSION['phone_error'] ?? "";

$old= $_SESSION['old'] ?? [];

?>
<html>  
    <head>
        <title>Form</title>
    </head>
    <body>
        <h2>User Form</h2>
        <form method="post" action="../controller/formvalidation.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $old['username'] ?? ''; ?>" placeholder="Enter username"></td>
                    <td style="color:red"><?php echo "$username_error"; ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $old['name'] ?? ''; ?>" placeholder="Enter name"></td>
                    <td style="color:red"><?php echo "$name_error"; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $old['email'] ?? ''; ?>" placeholder="Enter email"></td>
                    <td style="color:red"><?php echo "$email_error"; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="tel" name="phone" value="<?php echo $old['phone'] ?? ''; ?>" placeholder="Enter phone number"></td>
                    <td style="color:red"><?php echo "$phone_error"; ?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        <?php 
        unset($_SESSION['old']);
        unset($_SESSION['username_error']);
        unset($_SESSION['name_error']);
        unset($_SESSION['email_error']);
        unset($_SESSION['phone_error']);
        ?>
        </form>
    </body>

</html>
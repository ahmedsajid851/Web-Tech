<?php
session_start();
$username = $_POST['username'] ?? "";
$name = $_POST['name'] ?? "";
$email = $_POST['email'] ?? "";
$phone = $_POST['phone'] ?? "";
$hasUsernameError = true;
$hasNameError = true;
$hasEmailError = true;
$hasPhoneError = true;

$_SESSION['old']=[
    "username"=>$username,
    "name"=>$name,
    "email"=>$email,
    "phone"=>$phone
];

if(!$username){
   $_SESSION['username_error'] = "Username is required";
   $hasUsernameError = true;
}
else{
    unset($_SESSION['username_error']);
    $hasUsernameError = false;
}
if(!$name){
    $_SESSION['name_error'] = "Name is required";
    $hasNameError = true;
}
else{
    unset($_SESSION['name_error']);
    $hasNameError = false;
}
if(!$email){
    $_SESSION['email_error'] = "Email is required";
    $hasEmailError = true;
}
else{
    unset($_SESSION['email_error']);
    $hasEmailError = false;
}
if(!$phone){
    $_SESSION['phone_error'] = "Phone number is required";
    $hasPhoneError = true;
}
else{
    unset($_SESSION['phone_error']);
    $hasPhoneError = false;
}
if($hasUsernameError || $hasEmailError || $hasPhoneError || $hasNameError){
    header("Location: ../view/form.php");
}
else{
    echo"<h1> Form successfully submitted! </h1>";
    echo"<h2> Hello Mr, $username </h2>";
    echo"<h2> your email is, $email </h2>";
    echo"<h2> your phone number is, $phone </h2>";
}
?>





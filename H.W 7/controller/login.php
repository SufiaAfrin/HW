<?php
session_start();


$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$errors = [];

if(empty($email)){
    $errors['email_error'] = "Email is required";
}
if(empty($pass)){
    $errors['pass_error'] = "Password is required";
}

if(count($errors) > 0){
    $_SESSION['past'] = $_REQUEST;
   
    //redirection
    $_SESSION['form_errors'] = $errors;
    header("Location: ../index.php");
}else{

}

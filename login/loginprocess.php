<?php
require '../settings/core.php';
require '../controllers/customer_controller.php';


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
     $checkemail = login_controller($email);
     if(empty(login_controller($email))){
        echo "<script>alert('sorry email do not match');</script>";
     }
     else{

    $pass = $checkemail['customer_pass'];
    $match = password_verify($password, $pass);
    if ($match == true) {
        $_SESSION['email'] = $checkemail["customer_email"];
        $_SESSION["user_id"] = $checkemail["customer_id"];
        $_SESSION["username"] = $checkemail["customer_name"];
        $_SESSION["user_role"] = $checkemail["user_role"];

        if($_SESSION['user_role'] == 2){
        header('Location: ../view/customer.php');
        }if($_SESSION['user_role'] == 1){
            header('Location: ../admin/admin.php');
            }
        }
     else {
        echo "<script>alert('User credentials does not match'); window.location.href='../login/login.php';</script>";
    }
}
}



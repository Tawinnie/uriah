<?php

require '../settings/core.php';
require '../controllers/customer_controller.php';

if (isset($_POST['register'])) {

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $password = password_hash($pass, PASSWORD_DEFAULT); //hashing of password
    $country = $_POST['country'];
    $city = $_POST['city'];
    $contact = $_POST['phonenum'];
    $role = 2;

    $customer = login_controller($email);
    $alreadyemail = $customer['customer_email'];
    if ($alreadyemail) {
        echo "<script>alert('email already exist, try a different one'); window.location.href='../login/register.php';</script>";
    } else {
        $add_customer = add_customer_controller($name, $email, $password, $country, $city, $contact);
        if ($add_customer) {
            header("Location: ../login/login.php");
        } else {
            echo "<script>alert('User already exists'); window.location.href='../login/login.php';</script>";
        }
    }
}

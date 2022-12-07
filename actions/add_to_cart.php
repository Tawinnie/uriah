<?php

include  '../controllers/cart_controller.php';
session_start();


// check if button is clicked
if (isset($_POST["submit"])) {
    // grab form data
    $ip_address = $_POST["ip_address"];
    $customer_id = $_SESSION["user_id"];
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];


    $duplicate_check = ViewCart($product_id, $customer_id);

    if ($duplicate_check == false) {
        add_to_cart($product_id, $ip_address, $customer_id, $quantity);
        header("Location: ../view/cartpage.php");
    } else {
        echo "Something went wrong";
    }
}

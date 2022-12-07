<?php

include '../controllers/cart_controller.php';
// check if button is clicked
if (isset($_POST["submit"])) {
    // grab form data
    $product_id = $_POST["product_id"];
    $customer_id = $_POST["user_id"];



    //db deletion

    $result = removeCart($product_id, $customer_id);
    //echo $result;

    if ($result) {
        header("location: ../View/cartpage.php");
    } else {
        echo "Unable to Delete";
    }
}

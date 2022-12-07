<?php

require '../Controllers/product_controller.php';
session_start();

//if submit is clicked, post entries
if (isset($_POST['delete_cat'])) {
    $product = ($_POST['cat_id']);

    $result = deleteCat_Controller($product);
    if ($result) {
        header("Location: ../Admin/ViewCats.php");
    }
}

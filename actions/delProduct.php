
<?php

include '../controllers/product_controller.php';
session_start();

//if submit is clicked, post entries
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $result = deleteProduct_Controller($product_id);
    if ($result) {
        header("Location: ../admin/admin.php");
    } else {
        echo "<script>alert('Deletion unsuccessful!'); window.location.href='../actions/delProduct.php';</script>";
    }
}
?>

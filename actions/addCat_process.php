

<?php

require '../controllers/product_controller.php';
session_start();


if (isset($_POST['addCat'])) {
    $addCat = $_POST['cname'];
    $result = add_cat_controller($addCat);
    if ($result) {
        header("Location: ../admin/admin.php ");
    }
}
?>

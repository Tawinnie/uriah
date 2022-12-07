<?php

include "../controllers/product_controller.php";

if (isset($_POST['delete_brand'])) {

    $brand_id = $_POST['brand_id'];

   $result = deleteBrands_Controller($brand_id);

        if ($result) {
            header("location:../Admin/ViewBrands.php");
        } else {
            echo "Something went wrong.";
        }
    }

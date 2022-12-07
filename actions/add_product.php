<?php

require '../controllers/product_controller.php';

session_start();


//if submit is clicked, post entries
if (isset($_POST['addProduct'])) {
    $product_cat = ($_POST['product_cat']);
    $product_brand = ($_POST['product_brand']);
    $product_title = ($_POST['product_title']);
    $product_price = ($_POST['product_price']);
    $product_desc = ($_POST['product_desc']);
    $project_file = $_FILES['product_image']['name'];
    move_uploaded_file($_FILES["product_image"]["tmp_name"], "../Samples/docs" . $_FILES["product_image"]["name"]);
    $product_keywords = ($_POST['product_keywords']);



    $result = addProduct_controller($product_cat, $product_brand, $product_title, $product_price, $product_desc, $project_file, $product_keywords);
    if ($result) {
        echo "<script>alert('New service added successfully'); window.location.href='../action/add_product.php';</script>";
        header("Location: ../admin/admin.php");
    } else {
        echo "<script>alert('Unable to add service'); window.location.href='../action/add_product.php';</script>";
    }
}

if ($fileType == "application/msword") {
    if ($fileSize <= 200) {

        //New file name
        $random = rand(1111, 9999);
        $newFileName = $random . $fileName;

        //File upload path
        $uploadPath = "testUpload/" . $newFileName;

        //function for upload file
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "Successful";
            echo "File Name :" . $newFileName;
            echo "File Size :" . $fileSize . " kb";
            echo "File Type :" . $fileType;
        }
    } else {
        echo "Maximum upload file size limit is 200 kb";
    }
} else {
    echo "You can only upload a Word doc file.";
}

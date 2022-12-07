<?php
include "../controllers/product_controller.php";
require_once "../settings/core.php";
checkLogin();
checkRole();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <?php


    $get_id = $_GET['brand_id'];

    // get to the controller
    $one_brand = select_one_brands_controller($get_id);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $addBrand = $_POST['brand_name'];
        $update_brand =  update_brands_controller($get_id, $addBrand);

        if ($update_brand) {
            header("Location:../admin/admin.php");
        } else {
            echo "Something went wrong.";
        }
    }
    ?>

    <form method="POST">
        <div class="container">
            <h1>Group Update</h1>
            <p>Fill this to update a Group</p>
            <hr>
            <label for="brand_name"><b>Name of Group</b></label>
            <input type="text" value="<?php echo $one_brand['brand_name'] ?>" placeholder="Update brand name" name="brand_name" required>

            <input type="hidden" value="<?php echo $one_brand['brand_id'] ?>" placeholder="Update brand name" name="brand_id" required>
            <hr>

            <button type="submit" value="updated" name="updated">Update Brand</button>

        </div>
    </form>
</body>

<body>
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

    $get_id = $_GET['cat_id'];


    // get to the controller
    $one_cat = select_one_cats_controller($get_id);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $addCat = $_POST['cat_name'];
        $update_cat =  update_cat_controller($get_id, $addCat);


        if ($update_cat) {
            header("Location:../Admin/ViewCats.php");
        } else {
            echo "Something went wrong.";
        }
    }
    ?>

    <form method="POST">
        <div class="container">
            <h1> Cat Update</h1>
            <p>Fill this to update a Category</p>
            <hr>
            <label for="cat_name"><b>Name of Category</b></label>

            <input type="hidden" value="<?php echo $one_cat['cat_id'] ?>" name="cat_id" data-toggle="tooltip" data-placement="top" title="Enter new Project Type!" required>
            <input type="text" value="<?php echo $one_cat['cat_name'] ?>" name="cat_name" data-toggle="tooltip" data-placement="top" title="Enter new Project Type!" required>
            <button type="submit" value="updated" name="updated">Update Cat</button>

        </div>
    </form>
</body>

<body>
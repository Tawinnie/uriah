<?php
include '../Controllers/product_controller.php';
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
}
$ip_address = $_SERVER['REMOTE_ADDR'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../img/uriah.jpeg" type="image/png" />
    <title>Uriah Institute</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />

</head>

<body>
<header class="header_area">
    <div class="main_menu">
      <div class="search_input" id="search_input_box">
        <div class="container">

        </div>
      </div>
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="../img/uriah.jpeg" width="80" height="50" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item a ">
                                    <a class="nav-link" href="customer.php">View Services</a>
                                </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="../login/logout.php">Sign out</a>
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <br>
    <br>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border: radius 1px rem;">
                        <div class="card-body p-5 text-center">

                            <div class="container-fluid padding">
                                <form method="POST" action="../actions/add_to_cart.php">
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                                    <input type="hidden" name="ip_address" value="<?php echo $ip_address; ?>" />
                                    <div class="container-fluid padding">
                                        <!--a form must go here-->
                                        <label for="copies">Pages</label><br>
                                        <input type="number" value="" name="quantity" />
                                        <br>
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="submit">ADD TO CART</button>
                                        <br>
                                        <br>

                                    </div>
                                </form>
                            </div>
                            <?php

                            $one_product = select_one_product_controller($_GET['product_id']);
                            echo "Title of project : ";
                            echo $one_product['product_title'] . '<br>';
                            echo "Price for service : ";
                            echo $one_product['product_price'] . '<br>';


                            ?>

                            <!--Form for collecting quantity-->

</body>
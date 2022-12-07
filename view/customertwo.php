<?php
require '../settings/core.php';
require '../controllers/product_controller.php';

checkLogin();
$urole = checkRole();
$uname = getUserName();
$fetchData = select_all_cats_controller();

if ($urole == 1) {
    //redirection
    header('Location: ../admin/admin.php');
} else {
    // nothing
}
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
<h4>Welcome <?php echo $uname; ?></h4>
    <!--================ Start Header Menu Area =================-->
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
                            <li class="nav-item">
                                <a class="nav-link" href="./view/about-us.php">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./view/contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../login/logout.php">Sign out</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link search" id="search">
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->



    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top title-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3 text-white">Awesome Services</h2>
                        <p>These are the services we provide</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                while ($fetchData != 0) {



                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature">
                            <div class="icon"><span class="flaticon-student"></span></div>
                            <div class="desc">
                                <h4 class="mt-3 mb-2"><?php echo $fetchData; ?></h4>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <br>
                <br>
                <br>
                <br>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-book"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Thesis compilation</h4>
                            <p>

                            </p>
                        </div>
                    </div>
                </div> -->


                </p>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
<?php
require '../settings/core.php';

checkLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AdminPage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <hr>

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
                        <a class="nav-link" href="../admin/admin.php">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login/logout.php">Sign out</a>
                    </li>
            </div>
    </nav>
    <div class="container" background-color="#fffff">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-300">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-6 text-center">

                                <form action="../actions/addCat_process.php" method="post">
                                    <div class="category">
                                        Name of Service: <input type="text" name="cname">
                                        <br>
                                        <br>
                                        <input type="submit" class="btn btn-warning" style="background-color:#E7BC5B" name="addCat" value="Add">
                                    </div>
                                </form>
                                <!--================ Start Home Banner Area =================-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

</body>
<!--================ End Home Banner Area =================-->
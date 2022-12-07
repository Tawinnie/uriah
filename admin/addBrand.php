<?php
require '../settings/core.php';

checkLogin();
checkRole();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AdminPage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
body {
  background-image: url('about.png');
  background-repeat: no-repeat;
}
</style>
<body>
<header class="header_area">
    <div class="main_menu">
      <div class="search_input" id="search_input_box">
        <div class="container">

        </div>
      </div>
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
                    <br>
                    <br>
                    <li class="nav-item active">
                        <a class="nav-link" href="../admin/admin.php">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login/logout.php">Sign out</a>
                    </li>
            </div>
    </nav>
    <section class="vh-100" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-600">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center"  >
                            <form action="../actions/addBrand_process.php" method="POST">

                                <label for="brand_name"><b>New Service</b></label>
                                <input type="text" placeholder="Insert project type" name="bname" required>
                                <br>
                                <br>
                                <button type="submit" value="add" class="btn btn-dark" name="addBrand">Add</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
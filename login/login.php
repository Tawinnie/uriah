<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Uriah Institute</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="./vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <div class="search_input" id="search_input_box">
                <div class="container">

                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="../index.php"><img src="../img/uriah.jpeg" width="250" height="150" position="relative" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="container" background-color="#fffff">
                        <section class="vh-100">
                            <div class="container py-5 h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                            <div class="card-body p-6 text-center">

                                                <h3 class="mb-5">Sign in</h3>

                                                <form method="post" action="loginprocess.php">
                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="email">Email address</label>
                                                        <input type="email" name="email" id="email" class="form-control" />

                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="password">Password</label>
                                                        <input type="password" id="password" name="password" class="form-control" />

                                                    </div>

                                                    <!-- 2 column grid layout for inline styling -->
                                                    <div class="row mb-4">
                                                        <div class="col d-flex justify-content-center">



                                                            <div class="text-center">
                                                                <!-- Submit button -->
                                                                <button type="submit" name="login" class="btn btn- btn-block mb-4">Sign in</button>

                                                                <!-- Register buttons -->

                                                                <p>Not a member? <a href="./register.php" style="color:blue;">Register</a></p>
                                                            </div>
                                                </form>
                                                <!-- Collect the nav links, forms, and other content for toggling -->



                                                <!--creating a log form and center-->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>

                    </div>
                    </section>
                </div>
        </div>
</body>

</html>
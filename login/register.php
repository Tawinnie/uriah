<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="..//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="..//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="..//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />
    <title>Register</title>

</head>

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
                    <a class="navbar-brand logo_h" href="../index.php"><img src="../img/uriah.jpeg" width="80" height="50" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../view/about-us.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../login/login.php">Login</a>
                            </li>



                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border: radius 1px rem;">
                        <div class="card-body p-5 text-center">

                            <br>
                            <form method="POST" action="./registerprocess.php">
                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="fullname">Fullname</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control" />

                                </div>
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

                                <!-- Country input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="country">Country</label>
                                    <input type="text" name="country" id="country" class="form-control" />

                                </div>
                                <!-- City input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control" />

                                </div>
                                <!-- Phone input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="phonenum">Contact</label>
                                    <input type="text" name="phonenum" id="phonenum" class="form-control" />

                                </div>

                                <!-- Submit button -->
                                <button type="submit" name="register" style="background-color:#E7BC5B" class="btn btn-dark btn-block mb-4">Sign up</button>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>


</html>
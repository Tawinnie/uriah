<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/uriah.jpeg" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />
    <title>Search Results</title>
</head>

<body>
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
                        <a class="nav-link" href="../view/customer.php">Customer Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login/logout.php">Sign out</a>
                    </li>
            </div>
    </nav>
    <!--showing the table-->
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Category</th>
                <th>Brand </th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php
            require('../controllers/product_controller.php');

            $search = $_POST['searching'];

            $result = search_keywords_controller($search);
            foreach ($result as $productDisplay) {
                echo "<tr>
                        <td>" . $productDisplay['cat_name'] . "</td>
                        <td>" . $productDisplay['brand_name'] . "</td>
                        <td>" . $productDisplay['product_title'] . "</td>
                        <td>" . $productDisplay['product_price'] . "</td>
                        <td>" . $productDisplay['product_desc'] . "</td>
                        <td> </td>
                        <td><a href='../actions/add_to_cart.php?product_id=" . $productDisplay['product_id'] . "'>Add to Cart</a></td>
                        <td><a href='../view/single_offer.php?product_id=" . $productDisplay['product_id'] . "'>View Offer</a></td>
                        </tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>
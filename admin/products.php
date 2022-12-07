<?php
require '../settings/core.php';
include '../controllers/product_controller.php';
checkLogin();
checkRole();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 2rem;">
                            <div class="card-body p-5 text-center">
                                <div class="container">
                                <h4>New Project Details</h4>
                                    <form action="../actions/add_product.php" method="POST" enctype="multipart/form-data">
                                </div>
                                <div class="mb-3">
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Service</label>

                                <select name="product_cat" id="product_cat" class="form-control" width="10px">
                                    <!--fetching from the controller-->
                                    <?php
                                    $fetchCat = select_all_cats_controller();
                                    foreach ($fetchCat as $cat) {
                                        echo ' 
                            <option value="' . $cat['cat_id'] . '">' . $cat['cat_name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>People Groups</label>
                                <select name="product_brand" id="product_brand" class="form-control">
                                    <!--fetching from the controller-->
                                    <?php
                                    $fetchBrand = select_all_brands_controller();
                                    foreach ($fetchBrand as $brand) {
                                        echo ' 
                            <option value="' . $brand['brand_id'] . '">' . $brand['brand_name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="product_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label>Price</label>
                                    <input type="text" name="product_price" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <input type="text" name="product_desc" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>File</label>
                                    <input type="file" name="project_file" id="project_file" value="Upload Document">
                                </div>
                                <div class="mb-3">
                                    <label>Keywords</label>
                                    <input type="text" name="product_keywords" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" value="add" name="addProduct" class="btn btn-warning">Add New Project</button>
                                </div>

                                </form>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                                <div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</body>

</html>
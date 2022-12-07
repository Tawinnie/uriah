<?php

require_once "../settings/core.php";
checkLogin();
checkRole();
?>

<?php
// get to the controller
include "../controllers/product_controller.php";

if (isset($_GET["update"])) {
    // grab form data
    $product_id = $_GET["product_id"];
    $product_cat = $_GET["product_cat"];
    $product_brand = $_GET["product_brand"];
    $product_title = $_GET["product_title"];
    $product_price = $_GET["product_price"];
    $product_desc = $_GET["product_desc"];
    $product_keywords = $_GET["product_keywords"];

    $update_product = updateProduct_controller($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_keywords);

    if ($update_product) {
        header("Location: ../admin/admin.php");
    } else {
        echo "Something went wrong.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <hr>
    <header class="header_area">
        </hr>

        <div class="container">
            <a class='btn btn-warning' href="../admin/admin.php" role="button">Admin Panel</a>
            <a class='btn btn-warning' href="../admin/admin.php" role="button">View Projects</a>
            <br>
            <br>

        </div>
        <div class="container" background-color="#fffff">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-300">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                <div class="card-body p-6 text-center">

                                    <?php
                                    if (isset($_GET['product_id'])) {
                                        $get_id = $_GET['product_id'];
                                    }

                                    // get to the controller
                                    $one_product = select_one_product_controller($get_id);
                                    ?>

                                    <form action="./upProduct_process.php">
                                        <input type="hidden" value="<?php echo $get_id ?>" name="product_id">


                                        <div class="mb-3">
                                            </select>
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label>Category</label>

                                    <select name="product_cat" id="product_cat" class="form-control">
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
                                    <label>Brand</label>
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
                                    <input type="text" name="product_title" value="<?php echo $one_product['product_title'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="text" name="product_price" value="<?php echo $one_product['product_price'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <input type="text" name="product_desc" value="<?php echo $one_product['product_desc'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Keywords</label>
                                        <input type="text" name="product_keywords" value="<?php echo $one_product['product_keywords'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">

                                        <button type="submit" value="replace" name="update" class="btn btn-warning">Update Project</button>
                                    </div>

                                    </form>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

</body>

</html>
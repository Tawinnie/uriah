
<?php
session_start();
require_once '../controllers/product_controller.php';


if (isset($_POST['addBrand'])) {
    $addBrand = $_POST['bname'];
    $result = add_brands_controller($addBrand);
    if ($result) {
        header("Location: ../admin/admin.php ");
    }
}
?>

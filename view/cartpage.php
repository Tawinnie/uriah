<?php
session_start();
include '../controllers/cart_controller.php';
include  '../functions/functions.php';


//checking login


//getting all products
$allproducts = viewCustomercart_cls($_SESSION["user_id"]);
$ip_address = getIPAddress();
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>offer page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <header class="header_area">
    <div class="main_menu">
      <div class="search_input" id="search_input_box">
        <div class="container">

        </div>
      </div>
      <nav class="navbar navbar-light bg-light justify-content-between">
        <hr>
        <button type="button" onclick="window.location.href='customer.php'" class="btn btn-warning">View All Services</button>
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
          <div class="container d-flex align-items-center"></div>
        </header>
      </nav>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Service offer</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Totals</th>
            <th scope="col">Manage Quantity</th>
            <th scope="col">Remove From Cart</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allproducts as $key => $value) {
            $total = $total + ($value["qty"] * $value["product_price"]);
            echo '
                <tr>
                <td>' . $value["product_title"] . '</td>
                <td>' . $value["product_price"] . '</td>
                <td>' . $value["qty"] . '</td>
              
                <td>' . $value["qty"] * $value["product_price"] . ' </td>
              <td>
                <form class="form-inline" method="POST" action="../Actions/manage_qty.php">
                  <input class="form-control mr-sm-2" type="hidden" value="' . $ip_address . '" name="ip_address">
                  <input class="form-control mr-sm-2" type="hidden" value="' . $_SESSION["user_id"] . '" name="user_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" ' . $value["product_id"] . '">
                  <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Quantity" aria-label="Quantity">
                  <input type="submit" name="update_qty" value="update">
                </form>
              </td>
              <td>
              <form class="form-inline" method="POST" action="../Actions/remove_cart.php">
                  <input class="form-control mr-sm-2" type="hidden" value="' . $_SESSION["user_id"] . '" name="user_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" ' . $value["product_id"] . '">
                  <input type="submit" name="submit" value="remove">
                </form>
              </td>
               <br>     
              </tr>               ';
          }

          ?>
        </tbody>
      </table>
      <p>
        TOTAL PRICE :<?php echo $total; ?>
      </p>
      <form id="paymentForm">
        <input type="hidden" id="email-address" value='<?php echo $_SESSION['email'] ?>' required />
        <input type="hidden" id="amount" value='200' required />

        <div class="form-submit">
          <button type="submit" class="btn btn-primary" onclick="payWithPaystack()"> Proceed to payment </button>
        </div>
      </form>

      <script src="https://js.paystack.co/v1/inline.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);

        // PAYMENT FUNCTION
        function payWithPaystack(e) {
          e.preventDefault();
          let handler = PaystackPop.setup({
            key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            currency: 'GHS',
            onClose: function() {
              alert('Window closed.');
            },
            callback: function(response) {
              alert("payment have been made" + response.reference);
              $.ajax({
                url: "processing.php?reference=" + response.reference,
                method: 'GET',
                success: function(response) {
                  alert(response);
                }

              });
            }
          });
          handler.openIframe();
        }
      </script>


</body>


</html>
<?php

include "../settings/db_class.php";

class cart extends db_connection
{
    //add, edit, delete
    function ViewCart_cls($product_id, $customer_id)
    {

        $sql = "SELECT * FROM `cart` WHERE `p_id`='$product_id' AND `c_id` = '$customer_id'";

        return $this->db_fetch_one($sql);
    }

    function viewCustomercart_cls($customer_id)
    {

        $sql = "SELECT products.product_id, products.product_title, products.product_price, cart.p_id, cart.qty, 
                  cart.c_id FROM `products` JOIN cart WHERE product_id = cart.p_id AND cart.c_id = '$customer_id'";

        return $this->db_fetch_all($sql);
    }


    function add_to_cart_cls($product_id, $ip, $customer_id, $quantity)
    {

        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$product_id','$ip','$customer_id','$quantity')";

        return $this->db_query($sql);
    }
    function viewCustomerItems_cls($customer_id)
    {

        $sql = "SELECT COUNT(*) FROM cart WHERE cart.c_id = '$customer_id';";

        return $this->db_fetch_one($sql);
    }
    function removeCart_cls($product_id, $customer_id)
    {

        $sql = "DELETE FROM `cart` WHERE `p_id`='$product_id' AND `c_id` = $customer_id";

        return $this->db_query($sql);
    }

    function updateCart_cls($product_id, $customer_id, $quantity)
    {
        $sql = "UPDATE `cart` SET qty = '$quantity' WHERE p_id = '$product_id' AND c_id = '$customer_id'";

        return $this->db_query($sql);
    }


    function get_order_cls($ord_id)
    {
        $sql = "SELECT  `customer`.`customer_name`, `orders`.`order_id`, `orders`.`invoice_no`, `orders`.`order_date`, `orders`.`order_status` FROM `orders` JOIN `customer` ON (`customer`.`customer_id` = `orders`.`customer_id`) WHERE `orders`.`order_id` = '$ord_id'";
        return $this->db_query($sql);
    }


    function get_order_details_cls($ord_id)
    {
        $sql = "SELECT `products`.`product_title`, 	`products`.`product_price`, `orderdetails`.`qty`, `orderdetails`.`qty`*`products`.`product_price` as result FROM `orderdetails` JOIN `products` ON (`orderdetails`.`product_id` = `products`.`product_id`) WHERE `order_id`='$ord_id'";
        return $this->db_query($sql);
    }

    function displayCart_cls($cid)
    {
        $sql = "SELECT `cart`.`p_id`, `cart`.`c_id`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`c_id` = '$cid'";
        return $this->db_query($sql);
    }


    function Cart_Value_cls($cid)
    {
        $sql = "SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
        FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`c_id`='$cid'";
        return $this->db_query($sql);
    }

    function real_ip_cls()
    {
    }

    function displayCartNull_cls($ip_address)
    {
        $sql = "SELECT `cart`.`p_id`, `cart`.`ip_add`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`ip_add` = '$ip_address'";

        //run the query
        return $this->db_query($sql);
    }
    function cartValueNull_cls($ip_address)
    {
        $sql = "SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
        FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`ip_add`='$ip_address'";

        return $this->db_query($sql);
    }

    function add_pay_cls($amount, $email)
    {
        $sql = "INSERT INTO `pay`(`email`,`amount`) VALUES ('$email','$amount')";

        return $this->db_query($sql);
    }

    function add_payment_cls($amount, $customer_id, $order_id, $currency, $p_date)
    {
        $sql = "INSERT INTO `payment`( `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$customer_id','$order_id','$currency','$p_date')";

        return $this->db_query($sql);
    }


    function add_order_cls($customer_id, $invoice_no, $order_date, $order_stat)
    {
        $sql = "INSERT INTO `orders`( `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$customer_id','$invoice_no','$order_date','$order_stat')";
        return $this->db_query($sql);
    }

    function get_last_order_cls($invoice)
    {
        $sql = "SELECT * FROM `orders` WHERE `invoice_no`= '$invoice'";
        $data = $this->db_fetch_one($sql);
        return $data;
    }

    function sel_cart_user_cls($customer_id)
    {
        $sql = "SELECT * FROM `cart`  WHERE `c_id` = '$customer_id' ";
        $data = $this->db_fetch_all($sql);
        return $data;
    }

    function add_order_details_cls($order_id, $product_id, $qty)
    {
        $sql = "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$order_id','$product_id','$qty')";
        return $this->db_query($sql);
    }

    function delete_user_from_cart_cls($customer_id)
    {
        $sql = "DELETE FROM `cart` WHERE `c_id`='$customer_id'";
        return $this->db_query($sql);
    }

    function sel_user_cls($cid)
    {
        $sql = "SELECT * FROM customer WHERE customer_id = '$cid' LIMIT 1";
        $result = $this->db_fetch_one($sql);
        return $result;
    }
}

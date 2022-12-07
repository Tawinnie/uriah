<?php
//connect to the cart class
include "../classes/cart_class.php";

//View the cart
function viewCustomercart_cls($customer_id)
{
    $newdata = new cart();
    return $newdata->viewCustomercart_cls($customer_id);
}

function ViewCart($product_id, $customer_id)
{
    $newdata = new cart();
    return $newdata->ViewCart_cls($product_id, $customer_id);
}


//adding to cart
function add_to_cart($product_id, $ip, $customer_id, $quantity)
{
    $newdata = new cart();
    return $newdata->add_to_cart_cls($product_id, $ip, $customer_id, $quantity);
}

function viewCustomerItems($customer_id)
{
    $newdata = new cart();
    return $newdata->viewCustomerItems_cls($customer_id);
}
//deleting from cart
function removeCart($product_id, $customer_id)
{
    $newdata = new cart();
    return $newdata->removecart_cls($product_id, $customer_id);
}

//Updating cart 
function updateCart($product_id, $customer_id, $quantity)
{
    $newdata = new cart();
    return $newdata->updateCart_cls($product_id, $customer_id, $quantity);
}

function user_controller($customer_id)
{
    $sel_user = new cart();
    $result = $sel_user->sel_cart_user_cls($customer_id);
    return $result;
}


function add_order_ctr($customer_id, $invoice_no, $order_date, $order_stat)
{
    $select_contr = new cart();
    $data = $select_contr->add_order_cls($customer_id, $invoice_no, $order_date, $order_stat);
    return $data;
}

function get_last_order_ctr($invoice)
{
    $select_contr = new cart();
    $data = $select_contr->get_last_order_cls($invoice);
    return $data;
}

function add_payment_ctr($amount, $cid, $order_id, $currency, $p_date)
{
    $select_contr = new cart();
    $data = $select_contr->add_payment_cls($amount, $cid, $order_id, $currency, $p_date);
    return $data;
}

function select_cart_user_ctr($cid)
{
    $select_contr = new cart();
    $result = $select_contr->sel_cart_user_cls($cid);
    return $result;
}
function add_order_details_ctr($order_id, $product_id, $qty)
{
    $select_contr = new cart();
    $data = $select_contr->add_order_details_cls($order_id, $product_id, $qty);
    return $data;
}
function delete_user_from_cart_ctr($customer_id)
{
    $select_contr = new cart();
    $data = $select_contr->delete_user_from_cart_cls($customer_id);
    return $data;
}

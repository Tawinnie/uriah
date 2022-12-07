<?php

require '../classes/customer_class.php';


function add_customer_controller($name, $email, $password, $country, $city, $contact)
{
    //create an instances of the customer class
    $customer_instance = new Customer();
    //calls method from customer class
    return $customer_instance->add_customer($name, $email, $password, $country, $city, $contact);
}

function login_controller($email)
{
    //create an instances of the customer class
    $login_instance = new Customer();
    //calls method from customer class
    return $login_instance->login($email);
}

function verifylogin_controller($email, $psd)
{
    //create an instances of the customer class
    $login_instance = new Customer();
    //calls method from customer class
    return $login_instance->verify($email, $psd);
}

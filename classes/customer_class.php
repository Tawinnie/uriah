<?php


require '../settings/db_class.php';


//inherits methods from db_class

class Customer extends db_connection
{
    //returns true or false for all methods
    function add_customer($name, $email, $password, $country, $city, $contact)
    {
        $sql = "INSERT INTO customer(customer_name, customer_email,customer_pass, customer_country,customer_city,customer_contact,user_role) VALUES ('$name','$email','$password','$country','$city','$contact','2')";

        $sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) VALUES ('$name','$email','$password','$country','$city','$contact','2')";

        return $this->db_query($sql);
    }
    //selecting a particular user from a database
    function login($email)
    {
        $sql = "SELECT * FROM customer WHERE customer_email='$email'";
        return $this->db_fetch_one($sql);
    }
    function verify($email,$psd)
    {
        $sql = "SELECT * FROM customer WHERE customer_email='$email' and customer_pass='$psd'";
        return $this->db_fetch_one($sql);
    }
}

<?php

//require settings from db class file
require '../settings/db_class.php';


//BRANDS METHODS
class Brands extends db_connection
{
    //returns true or false for all methods
    //Inserting brand
    function add_brands_class($brand_name)
    {
        $sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$brand_name')";
        return $this->db_query($sql);
    }

    function update_brands_class($id, $brand_name)
    {
        $sql = " UPDATE `brands` SET `brand_name`='$brand_name' WHERE `brand_id`='$id'";
        return $this->db_query($sql);
    }

    function deleteBrands_class($brand_id)
    {
        $sql = "DELETE FROM `brands` WHERE `brand_id` = '$brand_id'";
        return $this->db_query($sql);
    }

    function select_all_brands_class()
    {
        $sql = "SELECT * FROM `brands`";
        return $this->db_fetch_all($sql);
    }

    function select_one_brands_class($brand_id)
    {
        $sql = "SELECT `brand_name`, `brand_id` FROM `brands` WHERE brand_id = $brand_id";

        return $this->db_fetch_one($sql);
    }
}


//CATEGORY METHODS
class Category extends db_connection
{
    //selecting brand
    function add_cat_class($cat_name)
    {
        $sql = "INSERT INTO `categories` (`cat_name`) VALUES ('$cat_name')";
        return $this->db_query($sql);
    }
    function update_cat_class($id, $cat_name)
    {
        $sql = " UPDATE `categories` SET `cat_name` ='$cat_name' WHERE `cat_id`='$id'";
        return $this->db_query($sql);
    }
    function deleteCat_class($cat_id)
    {
        $sql = "DELETE FROM `categories` WHERE `cat_id` = '$cat_id'";
        return $this->db_query($sql);
    }

    function select_all_cats_class()
    {
        $sql = "SELECT * FROM `categories`";
        return $this->db_fetch_all($sql);
    }
    function select_one_cats_class($cat_id)
    {
        $sql = "SELECT `cat_id`, `cat_name` FROM `categories` WHERE cat_id = $cat_id";
        return $this->db_fetch_one($sql);
    }
}




//PRODUCT METHODS------------------------------------------------------------------------------------------------------------------------------------------//
class Product extends db_connection
{
    function addProduct_class($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords)
    {
        $sql = "INSERT INTO `products`( `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) 
        VALUES ('$product_cat', '$product_brand', '$product_title', '$product_price', '$product_desc','$product_image', '$product_keywords')";
        return $this->db_query($sql);
    }

    function updateProduct_class($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_keywords)
    {
        $sql = "UPDATE `products` SET `product_cat`='$product_cat',`product_brand`='$product_brand',`product_title`='$product_title',`product_price`='$product_price',`product_desc`='$product_desc',`product_keywords`='$product_keywords' WHERE `product_id`='$product_id'";
        return $this->db_query($sql);
    }

    function select_all_products_class()
    {
        $sql = "SELECT * from products inner join brands on product_brand = brand_id inner join categories on product_cat = cat_id";
        return $this->db_fetch_all($sql);
    }

    function select_one_product_class($product_id)
    {
        $sql = "SELECT * FROM `products` WHERE `product_id`= '$product_id'";
        return $this->db_fetch_one($sql);
    }


    function deleteProduct_class($product_id)
    {
        $sql = "DELETE FROM `products` WHERE `product_id` = '$product_id'";
        return $this->db_query($sql);
    }

    function search_product_class($product_keywords)
    {
        $sql = "SELECT * FROM products inner join brands on product_brand = brand_id inner join categories on product_cat = cat_id WHERE `product_title` LIKE '%$product_keywords%'";
        return $this->db_fetch_all($sql);
    }
}

class ProductDisplay extends db_connection
{
    function display_allProducts_class()
    {
        $sql = "SELECT * FROM `products`";
        return $this->db_fetch_all($sql);
    }

    function display_oneProduct_class($product_id)
    {
        $sql = "SELECT * FROM `products` WHERE `product_id` = '$product_id'";
        return $this->db_fetch_one($sql);
    }
}

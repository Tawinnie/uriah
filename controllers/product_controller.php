<?php
require_once '../classes/product_class.php';

//brands methods
function add_brands_controller($brand_name)
{
    //create an instances of the customer class
    $brands_instance = new Brands();
    //calls method from customer class
    return $brands_instance->add_brands_class($brand_name);
}
function select_all_brands_controller()
{
    //create an instances of the select all brands class
    $allbrands_instance = new Brands();
    //calls method from select all brands class
    return $allbrands_instance->select_all_brands_class();
}
function select_one_brands_controller($brand_id)
{
    //create an instances of the select all brands class
    $allbrands_instance = new Brands();
    //calls method from select all brands class
    return $allbrands_instance->select_one_brands_class($brand_id);
}
function update_brands_controller($id, $brand_name)
{
    //create an instances of the customer class
    $brand_instance = new Brands();
    //calls method from customer class
    return $brand_instance->update_brands_class($id, $brand_name);
}

function deleteBrands_Controller($brand_id)
{
    $dleteProduct_instance = new Brands();
    return $dleteProduct_instance->deleteBrands_class($brand_id);
}


//CATEGORY METHODS----------------------------------------------------------------------------------------------------------------------//

function select_all_cats_controller()
{
    //create an instances of the select all brands class
    $allcats_instance = new Category();
    //calls method from select all brands class
    return $allcats_instance->select_all_cats_class();
}
function select_one_cats_controller($cat_id)
{
    //create an instances of the select all brands class
    $allcats_instance = new Category();
    //calls method from select all brands class
    return $allcats_instance->select_one_cats_class($cat_id);
}

function add_cat_controller($cat_name)
{
    //create an instances of the customer class
    $category_instance = new Category();
    //calls method from customer class
    return $category_instance->add_cat_class($cat_name);
}


function update_cat_controller($cat_id, $cat_name)
{
    //create an instances of the customer class
    $category_instance = new Category();
    //calls method from customer class
    return $category_instance->update_cat_class($cat_id, $cat_name);
}

function deleteCat_Controller($cat_id)
{
    $dleteProduct_instance = new Category();
    return $dleteProduct_instance->deleteCat_class($cat_id);
}


//PRODUCT METHODS-----------------------------------------------------------------------------------------------------------------//

function addProduct_controller($product_cat, $product_brand, $product_title, $product_price, $product_desc, $fileName, $product_keywords)
{
    //create an instances of the addProduct class
    $addProduct = new Product();
    //calls method from customer class
    return $addProduct->addProduct_class($product_cat, $product_brand, $product_title, $product_price, $product_desc, $fileName, $product_keywords);
}

function updateProduct_controller($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_keywords)
{
    //create an instances of the customer class
    $products_instance = new Product();
    //calls method from customer class
    return $products_instance->updateProduct_class($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_keywords);
}


function select_one_product_controller($product_id)
{
    //create an instances of the select all brands class
    $allcats_instance = new Product();
    //calls method from select all brands class
    return $allcats_instance->select_one_product_class($product_id);
}

function select_all_products_controller()

{
    //create an instances of the customer class
    $Display_allproducts_instance = new Product();
    //calls method from customer class
    return $Display_allproducts_instance->select_all_products_class();
}

function display_oneProduct_controller($product_id)
{
    //create an instances of the product class
    $Display_allproducts_instance = new ProductDisplay();
    //calls method from customer class
    return $Display_allproducts_instance->display_oneProduct_class($product_id);
}

function search_keywords_controller($product_keywords)
{
    //create an instances of the product class
    $search_instance = new Product();
    //calls method from customer class
    return $search_instance->search_product_class($product_keywords);
}

function deleteProduct_Controller($product_id)
{
    $dleteProduct_instance = new Product();
    return $dleteProduct_instance->deleteProduct_class($product_id);
}

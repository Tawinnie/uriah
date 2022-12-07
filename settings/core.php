<?php
//start session
session_start();

//for header redirection
ob_start();

//funtion to check for login
function checkLogin()
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../Login/login.php');
    }
}


//function to get USERNAME

function getUserName()
{
    if (isset($_SESSION['username'])) {
        return $_SESSION['username'];
    }
}


//function to check for role (admin, customer, etc)
function checkRole()
{
    if (isset($_SESSION['user_role'])) {
        return $_SESSION['user_role'];
    }
}

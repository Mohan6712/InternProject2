<?php 
    //Include constants.php for ADMIN_URI
    include('../config/constants.php');
    //1. Destory the Session
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'.ADMIN_URI.'admin/login.php');

?>
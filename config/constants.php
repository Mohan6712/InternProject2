<?php 
    //Start Session
    session_start();
    $uri = dirname($_SERVER["SCRIPT_FILENAME"]);
    $basePath= explode('/',$uri)[count(explode('/',$uri))-1].'/';

    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/'.$basePath);
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'onlinefoodorder');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>
<?php 
    //Start Session
    session_start();
    $root = 'http://localhost/';

    // main index url
    $uri = dirname($_SERVER["SCRIPT_FILENAME"]);
    $basePath= explode('/',$uri)[count(explode('/',$uri))-1].'/';

    // admin index url
    $admin_uri = dirname($_SERVER["SCRIPT_FILENAME"]);
    $base_admin_Path= explode('/',$admin_uri)[count(explode('/',$uri))-2].'/';
    $admin_dir_path = $root.$base_admin_Path.explode('/',$root)[count(explode('/',$admin_uri))-2].'/';



    //Create Constants to Store Non Repeating Values
    define('BASE_URI', $root);
    define('ADMIN_URI', $admin_dir_path);
    define('SITEURL', $root.$basePath);
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'onlinefoodorder');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>


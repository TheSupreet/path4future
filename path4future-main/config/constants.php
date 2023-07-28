<?php
    //Start Session
    session_start();

    //create constants to store Non Repeating Values
    define('SITEURL', 'http://localhost/path4future-main/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'future');  

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_connect_error()); // Database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_connect_error());   //selecting database

?>
<?php
    include('config/constants.php'); 

    if(!isset($_SESSION['user'])){
        $_SESSION['no-login-message'] = "<div>Please login to access our platform.</div>";
        header('location:'.SITEURL.'student-signup.php');
    }

?>
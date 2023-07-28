<?php 
    ob_start();
    include('config/constants.php'); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Login Page</title>
      <style>
         /* Basics */
         html, body {
         width: 100%;
         height: 100%;
         font-family: "Helvetica Neue", Helvetica, sans-serif;
         color: #444;
         -webkit-font-smoothing: antialiased;
         background:lightblue;
         background-image: url("images/login.jpg") ;
         background-size: cover ;
      }
         #container {
         position: fixed;
         width: 340px;
         height: 280px;
         top: 50%;
         left: 50%;
         margin-top: -140px;
         margin-left: -170px;
         background: #fff;
         border-radius: 3px;
         border: 1px solid #ccc;
         box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
         }
         form {
         margin: 0 auto;
         margin-top: 20px;
         }
         label {
         color: #555;
         display: inline-block;
         margin-left: 18px;
         padding-top: 10px;
         font-size: 14px;
         }
         p a {
         font-size: 11px;
         color: #aaa;
         float: right;
         margin-top: -13px;
         margin-right: 20px;
         -webkit-transition: all .4s ease;
         -moz-transition: all .4s ease;
         transition: all .4s ease;
         }
         p a:hover {
         color: #555;
         }
         input {
         font-family: "Helvetica Neue", Helvetica, sans-serif;
         font-size: 12px;
         outline: none;
         }
         input[type=text],
         input[type=password] ,input[type=time]{
         color: #777;
         padding-left: 10px;
         margin: 10px;
         margin-top: 12px;
         margin-left: 18px;
         width: 290px;
         height: 35px;
         border: 1px solid #c7d0d2;
         border-radius: 2px;
         box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
         -webkit-transition: all .4s ease;
         -moz-transition: all .4s ease;
         transition: all .4s ease;
         font-family: roboto;
         font-weight:700;
         }
         input[type=text]:hover,
         input[type=password]:hover,input[type=time]:hover {
         border: 1px solid #b6bfc0;
         box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
         }
         input[type=text]:focus,
         input[type=password]:focus,input[type=time]:focus {
         border: 1px solid #a8c9e4;
         box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
         }
         #lower {
         background: #ecf2f5;
         width: 100%;
         height: 69px;
         margin-top: 20px;
         box-shadow: inset 0 1px 1px #fff;
         border-top: 1px solid #ccc;
         border-bottom-right-radius: 3px;
         border-bottom-left-radius: 3px;
         }
         input[type=checkbox] {
         margin-left: 20px;
         margin-top: 30px;
         }
         .check {
         margin-left: 3px;
         font-size: 11px;
         color: #444;
         text-shadow: 0 1px 0 #fff;
         }
         
         input[type=submit] {
         float: right;
         margin-right: 20px;
         margin-top: 20px;
         width: 80px;
         height: 30px;
         font-size: 14px;
         font-weight: bold;
         color: #fff;
         background-color: #acd6ef; /*IE fallback*/
         background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
         background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
         background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
         border-radius: 30px;
         border: 1px solid #66add6;
         box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
         cursor: pointer;
         transition: 0.1s;
         }
         input[type=submit]:hover {
            width: 80px;
         height: 35px;
         color: rgb(133, 131, 131);
         background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
         background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
         background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
         }
         input[type=submit]:active {
         background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
         background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
         background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
         }
         .adm{
            text-align: center;
            border: 3px solid black;
            color: rgb(29, 12, 154);
            width: 100%;
            margin: auto;
            background-color: #4eb3d5;
            font-family: times new roman;
            
         }
      </style>
   </head>
   <body>
      <div>
         <?php
            if(isset($_SESSION['failed-login'])){
               echo $_SESSION['failed-login'];
               unset($_SESSION['failed-login']);
            }
         ?>
      </div>
      <div id="container">
        <h1 class="adm"> <u> PLatform login </u></h1>
         <form action="" method="POST">
            <label for="loginmsg" style="color:hsla(0,100%,50%,0.5); font-family:'Helvetica Neue',Helvetica,sans-serif;"><?php  echo @$_GET['msg'];?></label>
            <label for="username">Platform name:</label>
            <input type="text" name="platform_name">
            <label for="password">Platform Password:</label>
            <input type="password" name="platform_password">
            <div id="lower">
               <input type="checkbox"><label class="check" for="checkbox">  Keep me logged in</label>
              <a href=""><input type="submit" name="submit" value="Login"></a>               
            </div>
        
         </form>
         <?php 
            if(isset($_POST['submit'])){
               //echo "clicked" ;
               $platform_name = $_POST['platform_name'];
               $platform_password = $_POST['platform_password'];

               $sql = "SELECT * FROM tbl_pltform";
               
               $res = mysqli_query($conn,$sql);

               if($res == true){
                  $count = mysqli_num_rows($res);
                  if($count > 0){
                     while($rows = mysqli_fetch_assoc($res)){
                        $platform_name2 = $rows['platform_name'];
                        $platform_password2 = $rows['platform_password'];

                        if(($platform_name == $platform_name2) && ($platform_password == $platform_password2)){
                           // echo "welcome";
                           $_SESSION['login-success'] = "<div>Admin Login Successfully.</div>";
                           header('location:'.SITEURL.'6apg.php');
                           ob_end_flush() ;
                        }
                        else{
                           $_SESSION['failed-login'] = "<div>Invalid Username or Password.</div>"; 
                        }
                     }
                  }
               }
               else{
                  echo "Failed to insert data";
               }
            }
         ?>
      </div>
      
   </body>

</html>



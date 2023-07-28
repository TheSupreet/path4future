<?php 
    ob_start();
    include('config/constants.php'); 
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Panel</title>
</head>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .container {
            font-size: 20px;
            max-width: 13000px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        
        .row {
            color: white;
            
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        
        .col-2 {
            
            flex-basis: 50%;
            min-width: 500px;
        }
        
        body {
            background: radial-gradient(white, black);
            
        }
        
        .account-page {
            padding: 20px 0;
            background: radial-gradient(#fff, #3be138);
        }
        
        .form-container {
            
            background: #ffd6d6;

            background-image: url("images/bg.png");

            width: 400px;
            height: 600px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            margin: auto;
            border:2px solid #555;
            border-radius: 16px;
            box-shadow: 20px 30px 5px #555;
            overflow: hidden;
        }
        
        .form-container span {
            
            font-weight: 700px;
            padding: 0px 10px;
            color: rgb(10, 8, 8);
            cursor: pointer;
            width: 100px;
            display: inline-block;
        }
        
        .form-btn {
            
            display: inline-block;
        }
        
        .form-container form {
            
            max-width: 300px;
            padding: 0px 50px;
            position: absolute;
            top: 130px;
            transition: transform 0.75s ease;
        }
        
        form input {
            width: 300px;
            height: 30px;
            margin: 10px 0;
            padding: 0px 10px;
            border: 1px solid #ccc;
            border-radius: 2cm;
            font-weight: 500;
        }
        
        form .btn {
            width: 200px;
            height: 50px;
            border-color: #ff523b;
            cursor: pointer;
            margin-left: 50px;
            padding-left: 25pxpx;
            text-align: center;
            border-radius: 2cm;
            font-size:20px
            /* border-left: ; */
        }
        
        form .btn:focus {
            outline: none;
        }
        
        form .btn:hover {
            color:#fff;
            background: #ff523b;
        }
        
        #LoginForm {
            left: -400px;
            text-align: center;
        }
        
        #RegForm {
           
            margin-left: 400px;
            padding-bottom:10px;
        
             left: -400px;
        }
        
        .legs {
            width: 40px 55px 40px;
        }
        .submit{
        }
        
        form a {
            font-size: 15px;
            margin: 30px;
            text-align: justify;
            padding-top: 50px;
        }
        
        #Indicator {
            
            width: 10px;
            border: none;
            background: #ff523b;
            height: 3px;
            margin-top: 10px;
            transform: translateX(100px);
            border-radius: 100px;
            padding-left: 50px;
            padding-right: 50px;
            transition: transform 0.75s ease;
        }
        
        .due {
            display: inline-block;
            width: none;
            margin-bottom: 20px;
        }
        
        .due input {
            width: 20px
        }

        .wrapper{
            color: white;
        }
        
</style>

 <body>
   
    <div class="wrapper ">
        <div class="container">
            <div class="col-2">
                <h2  style="text-align: center; font-family: 'Monoton', cursive; margin: 3%;"> Panel</h2>
            </div>
            
            <div class="row">
                <div class="col-2">
                    <div class="form-container">
                    
                        <div class="form-btn">
                            
                            <span onclick="login()" style="color: #fff;">Login</span>
                            <span onclick="register()" style="color: #fff;">Register</span>
                            <hr id="Indicator">
                        </div>
                        <div>
                            <?php
                                if(isset($_SESSION['no-login-message'])){
                                    echo $_SESSION['no-login-message'];
                                    unset($_SESSION['no-login-message']);
                                }
                            ?>
                        </div>

                        <form action="" method="POST" id="LoginForm"> 
                                        
                            <div>
                                <div>USERNAME :</div>
                                <div>
                                    <input type="text" name="username2">
                                </div>
                            </div>
                            
                            <div>
                                <div>PASSWORD :</div>
                                <div>
                                    <input type="password" name="pw2">
                                </div>
                            </div>   
                            
                            <div>
                                <input type="submit" name="login" value="Login" class="btn">
                            </div>

                        </form>

                        <?php
                            if(isset($_POST['login'])){
                                // echo "clicked";
                                
                                $username2 = $_POST['username2'];
                                $pw2 = $_POST['pw2'];
                                
                                $sql2 = "SELECT * FROM tbl_register";
                                $res2 = mysqli_query($conn,$sql2);

                                if($res2==true){
                                    $count = mysqli_num_rows($res2);

                                    if($count > 0){
                                        while($rows=mysqli_fetch_assoc($res2))
                                        {
                                            $id = $rows['id'];
                                            $username1 = $rows['username'];
                                            $pw1 = $rows['pw'];

                                            if(($username1 == $username2) && ($pw1 == $pw2)){
                                                echo "login successful.";

                                                $_SESSION['user'] = $username1;

                                                header('location:'.SITEURL.'main.php');
                                                ob_end_flush();
                                                die();
                                            }
                                            // else if(($username1 != $username2) && ($pw1 != $pw2)){
                                            //     echo "neat agi";
                                            // }
                                        }
                                    }
                                    else{
                                        echo "No data in database.";
                                    }
                                }
                                
                            }
                        ?>

                        <form action="" id="RegForm" method="POST">
                            <div>
                                <div>USERNAME :</div>
                                <div><input type="text" name="username"></div>
                            </div>
                            <div>
                                <div>EMAIL ID :</div>
                                <div><input type="text" name="email"></div>
                            </div>
                            <div>
                                <div>PASSWORD :</div>
                                <div><input type="text" name="password"></div>
                            </div>
                            <div>
                                <input type="submit" name="register" value="Register" class="btn" >
                            </div>
                        </form>
                        
                        <?php
                            if(isset($_POST['register'])){
                                // echo "clicked"; 

                                $username = $_POST['username'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                
                                $sql = "INSERT INTO tbl_register SET
                                    username = '$username',
                                    email = '$email',
                                    pw = '$password'
                                "; 

                                $res = mysqli_query($conn,$sql);


                                if($res==true){
                                    echo "Registered Successfully.";
                                }

                            }
                        ?> 
                    
                    </div>   
                </div>   
            </div>
        </div>     
    </div>     
                    
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
    
    function register() {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    
    function login() {
        RegForm.style.transform = "translateX(500px)";
        LoginForm.style.transform = "translateX(400px)";
        Indicator.style.transform = "translateX(0px)";
    }
</script>
</body>


</html>




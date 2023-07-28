<?php 
    ob_start();
    include('config/constants.php'); 
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body{
    background-color:lightblue; 
    
  }
    form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
     /* justify-content:center; */
    transform:translateY(100px);
    border-radius: 5px;
    background-color:#fff;  

    }

    label {
      font-weight: bold;
      margin-bottom: 10px;
    }

    input[type="text"], input[type="password"] {
      width: 80%;
      padding: 12px 20px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
       width: 70%; 
      background-color: #4caf50;
      color: white;
      padding: 14px 20px;
      margin-bottom: 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
      color:black;
    }

    footer {
        background-color: #333;
        color: white;
        padding: 10px;
      border-radius: 8px;

        text-align: center;
    transform:translateY(280px);

    }

</style>
<body>
  <form action="" method="POST">
  <label for="username">ADMIN NAME:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">UNIQUE CODE:</label><br>
  <input type="password" id="password" name="unique"><br><br>
  <input type="submit" value="Submit" name="submit">
</form> 

<?php
  $username1 = "Supreet";
  $unique1 = "123";

  $username2 = "Shivu";
  $unique2 = "456";

  if(isset($_POST['submit'])){
    // echo "clicked" ;
    $username = $_POST['username'];
    $unique = $_POST['unique'];
    
    if(($username == $username1)){
      if($unique == $unique1){
        header('location:'.SITEURL.'admin-panel.php');
        ob_end_flush();
        // echo "welcome";
      }
    }
    else if($username == $username2){
      if($unique == $unique2){
        header('location:'.SITEURL.'admin-panel.php');
        ob_end_flush();
        // echo "welcome";
      }
    }
    else{
      echo "Neat agi login agi";
    }

  }
?>
 <footer>
        <p>developed by Supreet and Shivu</p>
  </footer>

</body>
</html>



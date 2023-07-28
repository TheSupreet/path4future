<?php 
    ob_start();
    include('config/constants.php'); 
?>

<!DOCTYPE html>
<html>
  <title>admin panel</title>
<head>

<style>
  *{
    margin:0;
    padding:0;
    width:100%;
  }
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      user-select: none;
      background-color:lightblue;

    }
    header {
      background-color: #333;
      color: white;
      padding: 20px;
      width: 100%;
    }
    /* nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      color: white;
      padding: 20px;
      width: 100%;
      height: 00px;

    } */
    .text-center{
      text-align:center;
      padding: 2px;
    }
    /* nav a {
      color: white;
      text-decoration: none;
    } */
    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color:lightblue;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .card {
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 2px 3px rgba(0,0,0,0.1);
      margin: 20px;
      max-width: 300px;
      padding: 20px;
      border-radius:10px;
      
    }
    .card h3 {
      font-size: 18px;
      margin: 0;
    }
    .card p {
      font-size: 14px;
      margin: 0;
      color: #666;
    }
    .ap{
        text-align: center;
    }
  .img{
    margin: 20px;
    height: 200px;
    width: 200px;
    display: flex;
    border-radius: 100px;
  }
  .path{
    text-align: center;
    margin-top: -100px;
  }
</style>

</head>

<body>
  
  <header>
    <div class='text-center'>
      <?php
         if(isset($_SESSION['login-success'])){
          echo $_SESSION['login-success'];
          unset($_SESSION['login-success']);
       }
      ?>
    </div>
    <img src="/path4future-main/images/logo.jpeg"  class="img" alt=""> <h1 class="path"> <u> Path 4 Future</u></h1>
    <h1 class="ap">Admin Panel</h1>
  </header>
  <!-- <nav>
    <a href="">Home</a>
   
    <a href="#">manage</a>
    <a href="#">Settings</a>
  </nav> -->
  <main>
    <div class="container">
      <div class="card">
      <h2>LOGIN AS </h2>  
      <a href="manage.php">
          <h3>User 1</h3>
          <p>Email: supreetkurdekar05@gmail.com</p>
          <p>Role: Admin</p>
        </a>
      </div>
      <div class="card">
         <h2>LOGIN AS </h2>
        <a href="manage.php">
          <h3>User 2</h3>
          <p>Email: shivumn@gmail.com</p>
          <p>Role: Admin</p>
        </a>
      </div>
    </div>
  </main>
</body>

<?php 
    ob_start();
    include('login-checkup.php');
    
    // echo $_SESSION['user'];
    $user = $_SESSION['user'];
    //  echo $user;

    $sql = "SELECT * FROM tbl_student WHERE student_name = '$user' ";
    $result = mysqli_query($conn,$sql);
    if($result==true){
        // echo "cool";
        $status = "not-accepted";
        $count = mysqli_num_rows($result);
        if($count > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $status = $row['status'];
                // echo $status ;
            }
            
        }
    } 
    
    // TO UNDERSTAND GET METHOD...
    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    //     echo $id;
    // }
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
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("bg4.jpg");
        background-size: cover;
    }
    
    header {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
    }
    
    h1 {
        margin: 0;
    }
    
    nav {
        background-color: #eee;
        padding: 10px;
    }
    
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    
    li {
        float: left;
    }
    
    a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    a:hover {
        background-color: #ddd;
    }

    footer {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom:0;
        left:0;
        width:100%;
    }
    .congrats{
        background-color: #E8D2A6;
        text-align : center;
        font-size : 30px;
        padding : 13% 0%;
        color: #A75D5D;
    }
</style>    
<body>
    <header>
        <h1>path 4 Future</h1>
        <h1>Internship Opportunities</h1>
    </header>
    <nav>
        <ul>
            <li><a href="<?php echo SITEURL ;?>"> Home page </a></li>
            <li><a href="<?php echo SITEURL ;?>main.php">Featured Internships</a></li>
            <li><a href="<?php echo SITEURL ;?>main.php">Internship Categories</a></li>
            <li><a href="<?php echo SITEURL ;?>main.php">Search Internships</a></li>
            <li><a href="<?php echo SITEURL ;?>student2.php">Profile</a></li>
            <li><a href="<?php echo SITEURL ;?>logout.php">Logout</a></li>
        </ul>
    </nav>
    <div>
        <?php
            if(isset($_SESSION['accept'])){
                echo $_SESSION['accept'];
                unset($_SESSION['accept']);
            }
            if(isset($_SESSION['reject'])){
                echo $_SESSION['reject'];
                unset($_SESSION['reject']);
            }else{
                
            }
        ?>

        <section>
            <?php 
                if($status === "accepted"){
                    echo "<div class='congrats'>Congratulations, your application is selected !</div>";
                }
                else if($status === "rejected"){
                    echo "<div class='congrats'>Sorry!, your application is rejected ! as your qualification doesn't meet our needs</div>";
                }
                else {
                    echo "<div class='congrats'> Your Application Is Still In Progress !</div>";
                }
            ?>
        </section>
    </div>
    <footer>
        <p>Copyright 2022 Internship Opportunities</p>
    </footer>
</body>
</html>
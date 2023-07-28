<?php include('login-checkup.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Main</title>
        <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("bg4.jpg");
        background-size: cover;
    }
    
    .header {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
        height: 290px;
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
    
    /* a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    a:hover {
        background-color: #ddd;
    } */
    
    /* main {
        margin: 0 auto;
        max-width: 800px;
        padding: 20px;
    } */
    
    /* section {
        margin: 20px 0;
    } */
    
    footer {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
    }

    .img{
    margin: 20px;
    height: 200px;
    width: 200px;
    display: flex;
    overflow: hidden;
    border-radius: 100px;
  }

  .img:hover{
    margin: 20px;
    height: 210px;
    width: 210px;
    display: flex;
    overflow: hidden;
    border-radius: 100px;
  }
  
  .path{
    text-align: center;
     transform:translateY(-140px)
  }

  .text-center{
    text-align: center;
  }
  .rev-btn{
    border-radius:10px;
  }
</style>

<body>
    <div class="header">
            <img src="/path4future-main/images/logo.jpeg"  class="img" alt="">
            <header  class="path">
                <h1 >Path 4 Future</h1>
                <br>
                <h1>Internship Opportunities</h1>
            </header>
    </div>
    <nav>
        <ul>
            <li><a href="<?php echo SITEURL ;?>"> Home page </a></li>
            <li><a href="<?php echo SITEURL ;?>main.php">Featured Internships</a></li>
            <li><a href="<?php echo SITEURL ;?>main.php">Internship Categories</a></li>
            <li><a href="<?php echo SITEURL ;?>main.php">Search Internships</a></li>
            <li><a href="<?php echo SITEURL ;?>student2.php">Profile</a></li>
            <li><a href="<?php echo SITEURL ;?>student-notify.php">Notification</a></li>
            <li><a href="<?php echo SITEURL ;?>logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section class="wrapper-review">
            <div class="container">
                <h1 class="title-cat text-center">OUR TESTIMONIES</h1>
                

                <?php
                    $sql = "SELECT * FROM tbl_review";
                    $res = mysqli_query($conn,$sql);

                    if($res){
                        $count = mysqli_num_rows($res);
                        if($count > 0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $name = $rows['name'];
                                $email = $rows['email'];
                                $review = $rows['review'];

                                ?>
                                <div class="review-menu-box">
                                        <div class="review-menu-desc">
                                            <h2 class="cust-name"><?php echo $name; ?></h2>
                                            <p class="review-email"><?php echo $email; ?></p>
                                            <p class="review-detail">
                                                <?php echo $review ; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    }
                ?>
            </div>
            <div class="clearfix"></div>
            <form action="" method="POST">
                    <table>
                        <a href="add-review.php"><input type="button" value="Add Review" name="add-review" class="rev-btn"></a>
                    </table>
            </form>
            
        </section>   
    </main>
    <footer>
        <p>Copyright 2022 Internship Opportunities</p>
        <p>developed by Supreet and Shivu</p>
    </footer>
</body>

</html>
<?php include('login-checkup.php'); ?>
<head>
        <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="wrapper-add-review">
            <div class="review-container">
            <h1 class="title-add">Add Review</h1>
             <div>
                <form action="" method="POST">
                    <table class="review-body">
                        <tr class="my-row">
                            <td class="label-left">Student Name :</td>
                            <td><input type="text" name="name" placeholder="your name" class="label-right"></td>
                        </tr>
                        <tr class="my-row">
                            <td class="label-left">Student Email :</td>
                            <td><input type="email" name="email" placeholder="your email" class="label-right"></td>
                        </tr>
                        <tr class="my-row">
                            <td class="label-left">Student Review :</td>
                            <td><textarea type="text" name="review" rows="5" cols="40" placeholder="your review" class="label-right"></textarea></td>
                        </tr>
                        <tr class="my-row">
                            <td>
                                <input type="submit" name="submit" class="submit-btn">
                            </td>
                        </tr>
                    </table>
                </form>

                <?php
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $review = $_POST['review'];
                        
                        $sql = "INSERT INTO tbl_review SET 
                            name = '$name',
                            email = '$email',
                            review = '$review'
                        "; 
                        $res = mysqli_query($conn,$sql);
                        if($res){
                            header('location:'.SITEURL.'review.php');
                        }
                    }
                ?>
             </div>             
            </div>
    </section> 

</body>    
    
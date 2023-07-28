<!-- <?php echo "Hello Admin!"; ?> -->

<?php include('config/constants.php'); ?>

<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
</html>

<style>
        .toggle {
            background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        }
        .toggle:hover {
            background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
        }
</style>

<div class="main-content">
   <h3>Student  Details</h3>

    <div class="wrapper">
        <br>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Student Name</th>
                <th>Email</th>
            </tr>
            <?php
                $sql = "SELECT * FROM tbl_register";
                $res = mysqli_query($conn,$sql);
                if($res == true){
                    $count = mysqli_num_rows($res);
                    $sn=1;

                    if($count > 0){
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            $id = $rows['id'];
                            $username = $rows['username'];
                            $email = $rows['email'];                           

                            ?>
                                <tr>
                                    <td><?php echo $sn++ ; ?></td>
                                    <td><?php echo $username ; ?></td>
                                    <td><?php echo $email ; ?></td>
                                </tr>
                            <?php
                        }
                    }                    
                }
                else
                {
                    //we don't have data in our database.
                    echo "Not have any data in database";
                }
            ?>
        </table>

        <a href="admin-panel.php" class="toggle">Back To Main Page</a>

    </div>
            <!-- footer starts -->
            <footer>
            <div>
                <ul>
                    <a href="#"><li><i class="fa-brands fa-instagram"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-twitter"></i></li></a>
                </ul>
                <p class="text-center footer-text">2023 All rights reserved. Developed By <i class="fa-solid fa-laptop-code"></i>crackheads</a> together we are Zinpreet</p>
            </div>
        </footer>
        <!-- footer ends -->
</div>

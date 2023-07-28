<!-- <?php echo "Hello Admin!"; ?> -->

<?php include('config/constants.php'); ?>

<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
</html>

<div class="main-content">
    <div class="wrapper">
        <h3>Manage Student</h3>
        <br>
        <?php 
            if(isset($_SESSION['admin-added'])){
                echo $_SESSION['admin-added'];
                unset($_SESSION['admin-added']);
            }
        ?>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Admin Name</th>
                <th>Actions</th>
            </tr>
            <?php
                $sql = "SELECT * FROM tbl_admin";
                $res = mysqli_query($conn,$sql);
                if($res == true){
                    $count = mysqli_num_rows($res);
                    $sn=1;

                    if($count > 0){
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            $id = $rows['id'];
                            $admin_name = $rows['admin_name'];
                            ?>
                                <tr>
                                    <td><?php echo $sn++ ; ?></td>
                                    <td><?php echo $admin_name ; ?></td>
                                    <td>
                                        <a href="">Update Admin</a>
                                        <a href="">Delete Admin</a>
                                    </td> 
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

    </div>
            <!-- footer starts -->
            <footer>
            <div>
                <ul>
                    <a href="#"><li><i class="fa-brands fa-instagram"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-twitter"></i></li></a>
                </ul>
                <p class="text-center footer-text">2023 All rights reserved, Simba Restaurant. Developed By <i class="fa-solid fa-laptop-code"></i> Supreet Shivu</a> together we are Shipreet</p>
            </div>
        </footer>
        <!-- footer ends -->
</div>

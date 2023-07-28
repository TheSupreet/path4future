<?php include('config/constants.php'); 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // echo $id;
    }
    if(isset($_SESSION['user'])){
        $student_name = $_SESSION['user'];
        // echo $student_name;
    }
?>

<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
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
    <h3>Manage Student</h3>

    

    <div class="wrapper">
        <br>
        <form action="" method="POST">

            

            <table>
                <tr>
                    <th>Sl.No</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Phone No.</th>
                    <th>College</th>
                    <th>Year</th>
                    <th>Branch</th>
                    <th>Skills</th>
                    <th>Actions</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM tbl_student";
                    $res = mysqli_query($conn,$sql);
                    if($res == true){
                        $count = mysqli_num_rows($res);
                        $sn=1;

                        if($count > 0){
                            while($rows = mysqli_fetch_assoc($res))
                            {
                                $id = $rows['id'];
                                $student_name = $rows['student_name'];
                                $gender = $rows['gender'];
                                $phone_no = $rows['phone_no'];
                                $college_name = $rows['college_name'];
                                $year = $rows['year'];
                                $branch = $rows['branch'];
                                $skills = $rows['skills'];
                                ?>
                                    <tr>
                                        <td><?php echo $sn++ ; ?></td>
                                        <td><?php echo $student_name ; ?></td>
                                        <td><?php echo $gender ; ?></td>
                                        <td><?php echo $phone_no ; ?></td>
                                        <td><?php echo $college_name ; ?></td>
                                        <td><?php echo $year ; ?></td>
                                        <td><?php echo $branch ?></td>
                                        <td><?php echo $skills ; ?></td>
                                        <td>
                                        <a href="individual.php?id=<?php echo $id ;?>">Process</a>
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

            <a href="admin-panel.php" class="toggle">Back To Main Page</a>

        </form>
     </div>
            <!-- footer starts -->
            <footer>
            <div>
                <ul>
                    <a href="#"><li><i class="fa-brands fa-instagram"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa-brands fa-twitter"></i></li></a>
                </ul>
                <p class="text-center footer-text">2023 All rights reserved. Developed By <i class="fa-solid fa-laptop-code"></i> Supreet Shivu </a> </p>
            </div>
        </footer>
        <!-- footer ends -->
</div>
</html>

<!-- 
    <td>
         <a href="<?php echo SITEURL ;?>student-notify.php?id=<?php echo $id ;?>">Accept</a>
        <a href="<?php echo SITEURL ;?>student-notify.php">Reject</a>   -->
        <!-- <a href="<?php echo SITEURL ;?>manage-student.php?id=<?php echo $id; ?>">accept</a> -->
        <!-- <input type="submit" name="accept" value="accept"> -->
        <!-- <input type="hidden" name="accept_id" value="<?php echo $id ;?>"> -->
        <!-- <input class="action" type="submit" name="reject" value="Reject"> -->
    <!-- </td> -->

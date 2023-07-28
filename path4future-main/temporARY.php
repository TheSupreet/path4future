<!-- <?php echo "Hello Admin!"; ?> -->

<?php include('config/constants.php'); ?>

<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
</html>

<div class="main-content">
    <div class="wrapper">
        <h3>Student  Details</h3>
        <br>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Resumes</th>
            </tr>
            


<?php

$sql = "SELECT * FROM tbl_register";
$res = mysqli_query($conn,$sql);
$sn = 1;

while($rows = mysqli_fetch_assoc($res)){
    $id = $rows['id'];
    $username = $rows['username'];
    $email = $rows['email']; 
    ?>
        <tr>
            <td><?php echo $sn++ ;?></td>
            <td><?php echo $username ;?></td>
            <td><?php echo $email ;?></td>
        </tr>

    <?php

}

// $sql2 =" SELECT * FROM tbl_aplication";
// $res2 = mysqli_query($conn,$sql2);

// if($res2 == true){
//     $count = mysqli_num_rows($res2);
//         if($count > 0){
//             while($rows = mysqli_fetch_assoc($res2)){
//                 $image_name = $rows['r_resume'];
//                 echo $image_name;
//                 ?>
//                     <tr>
//                         <td>
//                             <?php
//                                 if($image_name != ""){
//                                     ?>
//                                         <img src="<?php echo SITEURL;?>resumes/<?php echo $image_name ;?>" alt="src" width="200px" height="150px">
//                                     <?php
//                                 }
//                                 else{
//                                     echo "Image Not Available";
//                                 }
//                             ?>
//                         </td>
//                     </tr>
//                 <?php
//             }
//         }
//         else{
//             echo "No data available";
//         }
// }


//     echo "<tr>
// <td>$id</td>
// <td>$username</td>
// <td>$email</td>
// <td >
    
// </td>
// </tr>";
// <img src='/path4future-main/resumes/$resume' alt='src' style='width: 30%;'>








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
                <p class="text-center footer-text">2023 All rights reserved. Developed By <i class="fa-solid fa-laptop-code"></i>Sinchana Supreet Zaiba</a> together we are Zinpreet</p>
            </div>
        </footer>
        <!-- footer ends -->
</div>
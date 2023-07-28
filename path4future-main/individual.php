<!-- <?php echo "Hello Admin!"; ?> -->

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
<?php
    $sql = "SELECT * FROM tbl_student WHERE id='$id'";
    $res = mysqli_query($conn,$sql);
    if($res == true){
        $count = mysqli_num_rows($res);
        $sn=1;

        if($count == 1){
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
            }
        }                    
    }
    else
    {
        //we don't have data in our database.
        echo "Not have any data in database";
    }
?>


<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            *{
                padding: 0;
                margin: 0;
            }
            body{
                /* margin: 30px 40px; */
                background-color: #DFD3C3;
                min-height: 100%;
            }
            .container{
                padding: 6rem 0;

            }
            table{
                font-size: 1.3rem;;
                margin: 0px 30%;
                background-collabel-rightor: #D0B8A8;
            }
            .data-row{
                margin: 30px 40%;
                background-color: #D0B8A8;                
            }
            .label-left{
                padding: 20px 3rem;
                min-width: 7rem;
            }
            .label-right{
                padding: 20px 0;
                padding-left: 5rem;
                padding-right: 9rem;
            }
            input{
                padding: 3% 5%;
                margin: 2px 8px;
                font-size: 1rem;
                background-color: #EDEDED;
                border-style: none;
                box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            }
            input:hover{
                background-color: #DFD3C3;
                color: #674747;
            }
            .acpt{
                border-radius:10px;
                background:green;
            }
            .rejt{
                border-radius:10px;
                background:red;
            }
            a{
              margin-left: 43%;
              text-align: center;
              text-decoration: none;
              color: #6B728E;
              }
              .toggle {
                padding: 20px 0;
                padding-left: 5rem;
                padding-right: 9rem;
                background-color: darkslategray;
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
                margin: 0;
                 position: absolute;
                 top: 80%/;
                /* -ms-transform: translateY(-50%); */
                transform: translateY(40px);
                transform: translateX(360%);

                }
                .toggle:hover {
                background-color: white; 
                color: black; 
                border:2px solid #4CAF50;
                }
        </style>
    </head>
    <body>
        <section>
            <div class="container">
                <form action="" method="POST">
                    <table>
                        <tr class="data-row">
                            <td class="label-left">Name: </td>
                            <td class="label-right"><?php echo $student_name; ?></td>
                        </tr>
                        <tr class="data-row">
                            <td class="label-left">Gender : </td>
                            <td class="label-right"><?php echo $gender; ?></td>
                        </tr>
                        <tr class="data-row">
                            <td class="label-left">Phone No. : </td>
                            <td class="label-right"><?php echo $phone_no; ?></td>
                        </tr>
                        <tr class="data-row">
                            <td class="label-left">College : </td>
                            <td class="label-right"><?php echo $college_name; ?></td>
                        </tr>
                        <tr class="data-row">
                            <td class="label-left">Year : </td>
                            <td class="label-right"><?php echo $year; ?></td>
                        </tr>
                        <tr class="data-row">
                            <td class="label-left">Branch : </td>
                            <td class="label-right"><?php echo $branch; ?></td>
                        </tr>
                        <tr class="data-row">
                            <td class="label-left">Skills : </td>
                            <td class="label-right"><?php echo $skills; ?></td>
                        </tr>
                        <tr class="data-row">
                            <td class="label-left">Actions : </td>
                            <td class="label-right">
                                <input type="submit" class="acpt" name="accept" value="Accept">
                                <input type="submit" class="rejt" name="reject" value="Reject">
                            </td>
                        </tr>
                    </table>
            <a href="admin-panel.php" class="toggle">Back To Main Page</a>

                </form>
                
                <?php
                    if(isset($_POST['accept'])){ 
                    
                        //echo "accepted" ;            
                        $status = "accepted";
                    //    echo $status-new;

                        $sql2 = "UPDATE tbl_student SET status = '$status' WHERE id='$id' ";
                
                        $res2 = mysqli_query($conn,$sql2);
                        
                        if($res2 == true){
                            //echo " data inserted";
                        }
                        else {
                            //Failed to insert admin to db
                            echo "Failed to insert data";
                            // Create a session variable to display message
                            // $_SESSION['add-admin'] = "<div>Failed to add admin. </div>";
                            // Redirect Page to the manage-student.php
                            // header('location:'.SITEURL.'admin/add-admin.php' );
                        }
                    }

                    if(isset($_POST['reject'])){ 
                                        
                        //echo "rejected" ;            
                        $status = "rejected";
                    //    echo $status-new;

                        $sql2 = "UPDATE tbl_student SET status = '$status' WHERE id='$id'  ";
                
                        $res2 = mysqli_query($conn,$sql2);
                        
                        if($res2 == true){
                            //echo " data inserted";
                        }
                        else {
                            //Failed to insert admin to db
                            echo "Failed to insert data";
                            // Create a session variable to display message
                            // $_SESSION['add-admin'] = "<div>Failed to add admin. </div>";
                            // Redirect Page to the manage-student.php
                            // header('location:'.SITEURL.'admin/add-admin.php' );
                        }
                    }

                ?>  
            </div>


        </section>
    </body>
</html>

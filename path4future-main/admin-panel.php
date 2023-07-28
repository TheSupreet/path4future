<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        flex-direction: column;
        background-image: url("images/adminpage.jpg") ;
        background-size: cover ;
        /* background: linear-gradient(#55e7fc,#25c420); */
    }
    
    a {
        position: relative;
        display: inline-block;
        padding: 14px 36px;
        /* color: #fff; */
        color: #382039;
        margin: 10px 15px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 18px;
        letter-spacing: 1px;
        background-color: #DBEDF3;
        /* background: linear-gradient(90deg, #0162c8, #55e7fc); */
        border-radius: 40px;
        /* height: 40px; */
        border: 4px solid black;
    }
    
    .a {
        /* background: linear-gradient(90deg, #755bea, #ff72c0); */
        /* background-color: #C4B6B6; */
        background-color: #DBEDF3;

    }
    
    .a:hover {
        background-color: #B3E8E5;
        /* background-color: #2980b9; */
        /* change background color on hover */
        transform: translateY(-5px);
        /* lift the button on hover */
    }
    
    .b:hover {
        background-color: #B3E8E5;
        /* background-color: #2980b9; */
        /* change background color on hover */
        transform: translateY(-5px);
        /* lift the button on hover */
    }
    
    .a:active {
        background-color: #1e90ff;
        /* change background color when clicked */
        transform: translateY(0);
        /* push the button back down */
    }
    
    .b:active {
        background-color: #1e90ff;
        /* change background color when clicked */
        transform: translateY(0);
        /* push the button back down */
    }
    .intro{
        color: chartreuse;
        font-size: 200%;
        padding: 3% 4%;
    }
</style>
<body>

   <h2 class="intro">What are you looking for...</h2>

<table>

        <tr>
            <td><a class="b" href="<?php echo SITEURL; ?>student-list.php"> Student  Details</a></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><a class="a"  href="<?php echo SITEURL; ?>manage-student.php"> manage student</a></td>
        </tr>
    </table>

   
</body>
</html>


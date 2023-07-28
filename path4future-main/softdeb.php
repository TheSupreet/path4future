<!-- <?php include('config/constants.php'); ?> -->

<html>
    <head>
      <title>Full stack</title>
      
    </head>
<style>
        body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    h1 {
      margin: 0;
    }

    a {
      color: #fff;
      text-decoration: none;
    }

    a:hover {
      color: #00b8d4;
    }

    main {
      background-color: #eee;
    }

    section {
      padding: 20px 0;
    }

    h2 {
      color: #00b8d4;
      text-align: center;
    }

    form {
      max-width: 500px;
      margin: 20px auto;
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin: 10px 0;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"], select {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #00b8d4;
      color: #fff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
    }

    .program {
      margin: 20px 0;
    }

    section#contact {
      text-align: center;
    }

    address {
      font-style: normal;
      margin: 20px 0;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
 input{
      width: 100%;
      height: 40px ;
      font-size: 15px;
    }
</style>

  <body>
          <header>
            <div class="container">
              <h1>TRAINER CORPORATION Company</h1>
            </div>
          </header>
      <main>
            <section id="overview" class="container">
                    <h2>Overview</h2>
                    <p>Welcome to our website. We offer Software Development internship to you. Read on to learn more about our programs and how to apply.</p>
                <section id="programs" class="container">
                  <div class="program">
                    <h3>Software Development Internship</h3>
                    <p>Our Software Development Internship program offers the chance to work on a variety of projects regarding web dwvwlopment. Interns will have the opportunity to learn new technologies and work with a team of experienced developers.</p>
                  </div>
                </section>
                <section id="application" class="container">
                  <h2>Application</h2>
                  <p>To apply for one of our internship programs, please fill out the form below. All fields are required.</p>
        
        

                  <form action="7fullst.php" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" id="name" name="full_name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="your_email" required>
                    </div>
                    <div class="form-group">
                      <label for="resume">Resume:</label>
                      <input type="file" id="resume" name="r_resume" required>
                    </div>
                    <a href="index.php"><input type="submit" name="submit" value="Submit"></a>
                    
                  </form> 
      

            </section>
      </main>
  </body>
        
        
        <?php
        $con=new mysqli('localhost','root','','future');
        // echo "<script> alert('inserted sucessfull')</script>";

        if(isset($_POST['submit']))
        {
          $full_name=$_POST['full_name'];
          $your_email=$_POST['your_email'];
          $r_resume=$_FILES['r_resume']['name'];
          $temp1=$_FILES['r_resume']['tmp_name'];
          move_uploaded_file($temp1,"./resumes/$r_resume");

          
          
          $sqll ="insert into `tbl_aplication`(full_name,your_email,r_resume) values ('$full_name','$your_email','$r_resume')";
          
          $result3=mysqli_query($con,$sqll);

          if($result3)
          {
            echo "<script> alert('Application sent successfully')</script>";
          }
          
        }
        
        
        ?>

</html>
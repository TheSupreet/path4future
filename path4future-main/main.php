<?php include('login-checkup.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Main</title>
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
        background-image: conic-gradient(black, blue,black, blue, black);
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
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }
    
    a:hover {
        background-color: ;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        background-color: #4CAF50; 
         color: white;
    }
   
    main {
        margin: 0 auto;
        max-width: 800px;
        padding: 20px;
    }
    
    section {
        margin: 20px 0;
    }
    
    .internship {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        background-color: rgb(236, 226, 226);
    }
    
    footer {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
    }
    
    form {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }
    
    label {
        margin-bottom: 10px;
    }
    
    input[type="text"] {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px;
    }
    
    input[type="submit"] {
        background-color: #333;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #444;
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
            <li><a href="#featured">Featured Internships</a></li>
            <li><a href="#categories">Internship Categories</a></li>
            <li><a href="#search">Search Internships</a></li>
            <li><a href="student2.php">Profile</a></li>
            <li><a href="student-notify.php">Notification</a></li>
            <li><a href="review.php">Review</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section id="featured">
            <h2>Featured Internships</h2>
            <div class="internship" id="full-stack">
                <h3> <u>Fullstack web-deb Internship</u> </h3>
                <p> At HERO Company LTD <br> Our fULLSTACK WEB DEV internship program offers the chance to work on a variety of projects regarding web dwvwlopment. Interns will have the opportunity to learn new technologies and work with a team of experienced developers
                <a href="7fullst.php">APPLY NOW</a>
            </div>
            <div class="internship" id="sw">
                <h3><u>Software Development Internship</u> </h3>
                <p>At TRAINER CORPORATION Company <br> Our Software Development Internship program offers the chance to work on a variety of projects regarding web dwvwlopment. Interns will have the opportunity to learn new technologies and work with a team of experienced developers.</p>
                <a href="softdeb.php">APPLY NOW</a>
            </div>
            <div class="internship" id="ds">
                <h3><u>Data Science Internship</u> </h3>
                <p>At IBM Company <br> Data Science Internship program offers the chance to work on a variety of projects regarding web dwvwlopment. Interns will have the opportunity to learn new technologies and work with a team of experienced developers.</p>
                <a href="datascience.php">APPLY NOW</a>
            </div>
           
        </section>
        <section id="categories">
            <h2>Internship Categories</h2>
            <ul>
                <li><a href="#full-stack">Fullstack web-deb Internship</a></li>
                <li><a href="#sw">Software Development</a></li>
                <li><a href="#ds">Data Science Internship</a></li>
                
            </ul>
        </section>
        <section id="search">
            <h2>Search Internships</h2>
            <form>
                <label for="keywords">Internship:</label><br>
                <input type="text" id="keywords" name="keywords">
            </form>
        </section>
    </main>
    <footer>
        <p>Copyright 2022-23 Internship Opportunities</p>
        <p>developed by Supreet and Shivu</p>
    </footer>
</body>

</html>
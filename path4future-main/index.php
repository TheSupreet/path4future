<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Path 4 Future</title>
</head>
<style>
    .body {
        background-image: url("images/main.jpg");
        background-size: cover ;
    }
    
    .content {
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-100%);
        text-align: center;
        color: #fff;
    }
    
    .content h1 {
        color: blueviolet;
        width: 30%;
        font-size: 70px;
        margin: auto;
        background-color: rgb(66, 239, 245);
        background-image: radial-gradient(orange 5%, lightblue 25%, pink 70%);
        
        padding: 10px 0;
        left: 100px;
        align-items: center;
        text-align: center;
        align-self: center;
        box-shadow: 0 0 rgba(0, 0, 0, 0.5);
        border-radius: 70px;
    }
    
    .and {
        margin: 20px auto;
        font-weight: 30;
        font-size: 20px;
        text-indent: 20px;
        background-color: white;
        font-style: ,cursive;
        color: #fff;
        background: transparent;
        
	    font-family: 'Monoton', cursive;
    }
    
    button {
        width: 200px;
        padding: 15px 0;
        text-align: center;
        border-radius: 25px;
        font-weight: bold;
        border: 2px solid black;
        background: transparent;
        color: rgb(255, 255, 255);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    
    span {
        background: black;
        height: 100%;
        width: 0;
        color: black;
        border-radius: 25px;
        position: absolute;
        left: 0;
        bottom: 0;
        z-index: -1;
        transition: 0.5s;
    }
    
    .btn {
        transform: translateY(+800);
    }
    
    .crr {
        color: rgb(17, 1, 1);
        background-color: rgb(183, 177, 177);
        font-family: cursive;
        background-image: linear-gradient( pink, orange );
        width: 30%;
        margin: auto;
        border-radius: 16px;
        transform:translateY(100px);
    }
    
    button:hover span {
        width: 100%;
        line-height-step: 10;
    }
    
    button:hover {
        transition: 0.5s;
        width: 220px;
        border: solid violet;
    }
    
    .ul {
        width: 85%;
        margin: auto;
        padding: 35px 0;
        align-items: center;
        justify-content: space-between;
    }
     
</style>

<body class="body">
    <div class="content">

        <div class="and">
            <h3> Build your career with the best platform</h3>
        </div>
        <h1>Path4Future</h1>
        <br>
        <br>
        <br>
        <div class="btn">
            <a href="student-signup.php"><button type="button"> <span></span>  Student</button></a>
            <a href="3admins.php"><button type="button"> <span></span>  Admins</button></a>
            <br>
        </div>
        <br>

        <h2 class="crr">
            <marquee scrollamount="7" direction="right" behavior="alternate"> Career ki guarantee 👍</marquee>
        </h2>


    </div>
    </div>
    
</body>


</html>
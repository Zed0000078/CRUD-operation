<?php
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = md5($_REQUEST['password']);
        $confirmpassword = md5($_REQUEST['confirmpassword']);

        $conn = mysqli_connect("localhost", "root", "", "crud3") or die("connection failed");
        $sql0 = "SELECT email from user WHERE email='$email'";
        $result0 = mysqli_query($conn, $sql0);
        

        if($password == $confirmpassword){
            if(mysqli_num_rows($result0)>0){
                ?>
            <script>
                //Existing email should not create an account
                alert("This email is already exist.");
                window.location.href = " http://localhost/crud3/crud_html/signup.php"
                </script>
            <?php
        }else{
            $sql = "INSERT INTO user(username, email, passwords) VALUES ('{$username}', '{$email}', '{$password}')";
            $result = mysqli_query($conn, $sql) or die("Connection is not established");
        }
    }else{
        ?>
        <script>
            //Password Mismatch    
            alert("Password mismatch");
            window.location.href = " http://localhost/crud3/crud_html/signup.php"
            </script>
        <?php
    }
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
 
body{
background:#222;
margin: 40px 50px;
color:#4a8df8;
font-family: 'Raleway', cursive;
font-weight:100;
}
h1{
    color:#4a8df8;
    font-family: 'Raleway', cursive;
font-weight:100;
font-stretch:normal;
font-size:3em;
}
a{
color:#4a8df8;
font-family: 'Raleway', cursive;
}
.slider{
    position:absolute;
width:400px;
height:2px;
margin-top:-30px;
}
.line{
position:absolute;
background:#4a8df8;
width:400px;
height:2px;
}
.break{
    position:absolute;
    background:#222;
    width:6px;
    height:2px;
}


    </style>


    <body>
<br><br><br>
<h1>Signup Successful...</h1>
<div class="slider">
<div class="line"></div>
<div class="break dot1"></div>
<div class="break dot2"></div>
<div class="break dot3"></div>
</div>
<p>Login Here</p>
<!-- <br> -->
<a href="login.php">link</a>
<!-- <a href="login.php"><button>link</button></a> -->
</body>
</html>
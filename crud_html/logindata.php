<?php
// session_start();



$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);

$conn = mysqli_connect("localhost", "root", "", "crud3") or die("connection failed");
$sql0 = "SELECT * from user WHERE email='$email'";
$result0 = mysqli_query($conn, $sql0);
$row = mysqli_fetch_assoc($result0);
if(mysqli_num_rows($result0)>0){ 

    if($row['passwords']==$password){
        session_start();
       $_SESSION["name"]=$row['username'];
    //    session_unset();
    //    session_destroy() ;  
    ?>
    <script>
        alert("logged in");
        window.location.href="../crud_html"
    </script>

<?php
    }else{
        ?>
        <script>
            alert("Passoword not matched")
            window.location.href="login.php"

        </script>
    <?php
    }
   
}else{
    ?>
        <script>
            alert("Email does not exist.")
        </script>
    <?php

}
        

?>

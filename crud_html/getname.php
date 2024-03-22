<?php
    $email = $_REQUEST('email');
    $conn = mysqli_connect("localhost", "root", "", "crud3") or die("connection failed");
    $sql = "SELECT * from user WHERE email = {$email}";
    $result =  mysqli_query($conn, $sql);
    

?>

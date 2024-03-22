<?php 
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost", "root", "", "crud3") or die("connection failed");
    
$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')  ";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

// header("Location : http://localhost/crud3/crud_html/index.php");
?>
<script>window.location.href = "http://localhost/crud3/crud_html/index.php"</script>
<?php


mysqli_close($conn);
    
?>
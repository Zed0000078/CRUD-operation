<?php
echo $stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student where sid= {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

?>

<script>
    window.location.href = "http://localhost/crud3/crud_html/index.php";
</script>
<?php
mysqli_close($conn);

?>
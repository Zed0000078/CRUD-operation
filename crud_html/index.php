<?php
if(isset($_SESSION["name"])){
  header("Location: login.php");
    // session_unset();
}
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    
    <?php
    
    include 'config.php';

    $sql = "SELECT * FROM student";
    
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if(mysqli_num_rows($result) > 0) {

        ?>

<table cellpadding="7px">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <thead>Action</th>
    </thead>
    <tbody>
              <?php 
                $n = 1;

                while($row = mysqli_fetch_assoc($result)){
                    $sq = "SELECT * FROM studentclass where cid = {$row['sclass']} ";
                    $result1 = mysqli_query($conn, $sq);
                    $courseName=mysqli_fetch_array($result1);
                    ?>
              <tr>
                  <td><?php echo $n ?></td>
                  <td><?php echo $row['sname']; ?></td>
                  <td><?php echo $row['saddress']; ?></td>
                  <td><?php echo $courseName['cname']; ?></td>
                  <td><?php echo $row['sphone']; ?></td>
                  <td>
                      <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                      <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                  </td>
                </tr>
                
                <?php $n++; } ?>

            </tbody>
        </table>
    <?php }else{
        echo "<h2>No record found</h2>";
    } 
    mysqli_close($conn)
    ?>


    
</div>
</div>
</body>
</html>

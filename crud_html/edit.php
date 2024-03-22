<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php  
         $conn = mysqli_connect("localhost", "root", "", "crud3") or die("connection failed");
         
         $stu_id = $_GET['id'];
         $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        
         $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        
     
            
            $row = mysqli_fetch_assoc($result);

                ?>

<form class="post-form" action="savedata.php" method="post">
    <div class="form-group">
        <label>Name</label>
        <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
        <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
    </div>
    <div class="form-group">
        <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>
     

      <div class="form-group">
          <label>Class</label>
           <select name="sclass">
            <?php 
                $sql2 = "SELECT * FROM studentclass";
                $result1 = mysqli_query($conn, $sql2) or die("Query Unsuccessful");
                
                if(mysqli_num_rows($result1) >0){
                   
                   while($row2 = mysqli_fetch_assoc($result1)){
                    
?>
                       <option value='<?php echo $row2['cid'];?>' <?php if($row2['cid']==$row['sclass']){ echo "selected"; }?>> <?php echo $row2['cname'];?></option>
                       <?php } } ?>
           </select>
      </div>


      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"/>
      </div>
      
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php

           
?>
</div>
</div>
</body>
</html>

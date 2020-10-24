<!DOCTYPE html>
<html>
<head>
  <title>Free Records in Database</title>
</head>
<style type="text/css">
  form{
    display:block inset;
		height: 300px;
		width: 350px;
		background-color: #F3F5F6;
		position: relative;
		top: 70px;
		left: 400px;
		padding: 30px 0 0 120px; 
  }

  input{
margin-left: 50px;
margin-bottom: 20px;
  }
</style>

<body>


<?php
include('includes/db_connection.php');
if(isset($_POST['submit'])){
    $slotID =  $_POST['slot1'];

    $result=mysqli_query($conn,"SELECT * FROM users WHERE slot='$slotID'");
    
        $row1 = mysqli_fetch_row($result);

    
   
        $delete = mysqli_query($conn,"DELETE FROM users WHERE slot='$slotID'");
    
        if(!$delete)
        {
            echo mysqli_error($conn);
        }
        else
        {
          $ss=mysqli_query($conn,"SELECT NOW()");
          $row2 = mysqli_fetch_row($ss);

            $sql =mysqli_query($conn,"SELECT TIMESTAMPDIFF(MINUTE,'$row1[4]','$row2[0]')");
            $row = mysqli_fetch_row($sql);
            $ts=$row[0]; 
          echo "Parking Duration ".$ts."mins.";
          echo "<br>";
          echo "Charges as Rs.1/Min : Rs." . $ts; 
               }
    }
  mysqli_close($conn);
  ?>
  <form method="POST">
Slot No. to free : <input type="text" name="slot1" placeholder="Enter Slot Number" Required>
  <br/>
  <input type="submit" name="submit" value="Submit">
  </form>

</body>
</html>
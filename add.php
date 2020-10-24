<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
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
include('includes/db_connection.php');// Using database connection file here

if(isset($_POST['submit']))
{		
    $firstname = $_POST['firstname'];
    $phone = $_POST['phone'];
    $slot=$_POST['slot'];


    $insert = mysqli_query($conn,"INSERT INTO users(slot,name,phone,arrivaldate) VALUES
     ('$slot','$firstname','$phone',now())");

    if(!$insert)
    {
      echo "slot already booked";
        echo mysqli_error($conn);
    }
    else
    {

        echo "Records added successfully.";
    }
}

mysqli_close($conn); // Close connection
?>

<h3>Fill the Form</h3>

<form method="POST">
Slot No. : <input type="text" name="slot" placeholder="Enter Slot Number" Required>
  <br/><br/>
  Full Name : <input type="text" name="firstname" placeholder="Enter Full Name" Required>
  <br/><br/>
  Phone No. : <input type="text" name="phone" placeholder="Enter Phone no." Required>
  <br/><br/>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

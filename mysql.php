<?php
$conn=mysqli_connect("localhost","root","","parking");
$sql = "CREATE TABLE users (
id int(100) NOT NULL AUTO_INCREMENT primary Key , 
slot  int(50),
name VARCHAR(256) ,
phone VARCHAR(10),
arrivaldate datetime
)";
if(mysqli_query($conn,$sql)){
	echo "table created";
}
else{
	echo "table not created";
}
?>
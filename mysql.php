<?php
$conn=mysqli_connect("vrk7xcrab1wsx4r1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	","u5c6dgfgisl2jjid","hs8sigl6t16gqd33","to42z1r546dhx1a7");
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

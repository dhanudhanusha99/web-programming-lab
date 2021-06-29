<?php
$con=mysqli_connect("localhost","root","");
if($con->connect_error)
{
 echo"connection failed";
}
else{
	$db="CREATE DATABASE restaurants";
	if($con->query($db)==true){
		$con=mysqli_connect("localhost","root","","restaurant");
	}
	$tb="CREATE TABLE restaurant(icode INT PRIMARY KEY,iname varchar(25) NOT NULL,types varchar(25),quantity INT,price decimal(5,2))";
	if($con->query($tb)){
		echo"table created";
	}
}
$con->close();
?>
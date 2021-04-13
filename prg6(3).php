<?php
$conn=new mysqli("localhost","root","","billdetails");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);

}
$sql="insert into bill_tbl(id,item,price)values(1,'Rice',50),(2,'chappathi',5),(3,'coffee',15),(4,'Tea',10)";
if($conn->query($sql)==TRUE)
{
    echo "Inserted successfully";

}
else
{
    echo "error".$sql."<br>".$conn->error;

}
$conn->close();
?>
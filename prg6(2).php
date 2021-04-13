<?php
$conn=new mysqli("localhost","root","","billdetails");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="create table bill_tbl(id int(25) ,item varchar(30) ,price decimal(5,2))";
if($conn->query($sql)==TRUE)
{
    echo "Table created successfully";

}
else
{
    echo "Error creating table".$conn->error;

}
$conn->close();
?>
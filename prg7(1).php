<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
echo "connection unsuccessful";
else{
$d="CREATE DATABASE groc2";
if($cc->query($d)==true){
$cc=mysqli_connect("localhost","root","","groc2");
}
$s="CREATE TABLE grocery(itemcode INT PRIMARY KEY,itemname VARCHAR(25),itype VARCHAR(25),available VARCHAR(25),expiry DATE)";
if($cc->query($s))
    {echo "table created";}
}
$cc->close();

?>
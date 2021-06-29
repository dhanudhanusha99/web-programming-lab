<!DOCTYPE html>
<html>
<head>
<style>
	body{
		font-size:10px;
		background-color:pink;
	}
	table{
		font-size:20px;
		background-color:blue;
	}
</style>

</head>
<body>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","restaurant");
if($con->connect_error){
	echo"connection failed";
}
else{
	if(isset($_POST['submit']))
	{
		$a=($_POST['icode']);
		$b=($_POST['iname']);
		$c=($_POST['types'])
		$d=($_POST['quantity']);
		$e=($_POST['price']);
		$q="INSERT INTO restaurant values('$a','$b','$c','$d','$e')";
		if($con->query($q))
			echo"values inserted";
		else
			echo"invalid entry";
	}
	if(isset($_POST['show']))
	{
		$sum=0;
		$sql="select * from restaurant";
		$result=$con->query($sql);
		echo"<center><br><br><br>";
		echo"<table border='1'><caption>list of entries</caption><tr>
		<td>itemcode</td>
		<td>itemname</td>
		<td>type</td>
		<td>quantity</td>
		<td>price</td>
		</tr>";
		while($row=$result->fetch_assoc()){
			
			echo"<tr><td>".$row['icode']."</td><td>".$row['iname']."</td><td>".$row['types']."</td><td>",.$row['quantity']."</td><td>".$row['price']."</td></tr>";
			$sum+=$row['price'];
		}
		echo"<tr><td colspan=3>total</td><td>".$sum."</td></tr>";
		echo"</table>";
		echo"</center>";

	}
}
$con->close();
?>
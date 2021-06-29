<!DOCTYPE html>
<html>
<head>
	<title>restaurant</title>
	<style>
		body{
			background-color:#E0EF58;
			font-style:calibri;
		}
		h4{
			font-style:algerian;
		}
		table{
			background-color:yellow;
			font-size:20px;
		}
	</style>
</head>
<body>
	<form action="final.php" method="POST" name="restaurant">
		<center>
		<h4>Restaurant</h4>
		
			<table border='1'>
				    <tr>
					<td>Item code</td>
					<td><input type="number" name="icode" id="icode" required/></td>
					</tr>
					<tr>
					<td>Itemname</td>
					<td><input type="text" name="iname" id="iname" required/></td>
					</tr>
					<tr>
					<td>Type</td>
					<td><input type="text" name="types" id="types" required/></td>
					</tr>
					<tr>
						<td>Quantity</td>
						<td><input type="text" name="quantity" id="quantity"></td>
					</tr>
					<tr>
						<td>Price</td>
						<td><input type="text" name="price" id="price"></td>
					</tr>
					<tr>
						<td><input type="submit" value="submit" name="submit" id="submit" onclick="return 
						validate()"></td>
						<td><input type="submit" value="show" name="show" id="show"></td>
					</tr>
				</table>
			</center>
		</form>
		<script>
			function validate()
			{
				var itemname=document.getElementById("iname");
				var quantity=document.getElementById("quantity");
				var name=/^[A-Z a-z]+$/;
				var no=/^[0-9]+$/;


				if(itemname.value==""){
					window.alert("invalid entry");
					return false;
				}
				if(!(itemname.value.match(name))){
					window.alert("invalid entry");
					return false;
				}
				if(quantity.value==""){
					window.alert("invalid entry");
					return false;
				}
				if(!(quantity.value.match(no))){
					window.alert("invalid entry");
					return false;
				}
				return true;
			}
</script>
</body>
</html>
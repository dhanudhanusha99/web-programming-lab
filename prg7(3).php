<html>
    <head>
        <style>
            body{
                
                font-size:15px;
            }
            table{
                font-size:20px;
            }</style>
            </head>
            <body></body>
        </html>
<?php
$cc=mysqli_connect("localhost","root","","groc");
if($cc->connect_error)
    echo "connection failed";
else
{
  if(isset($_POST['s1']))
    {
        $v=($_POST['itemcode']);
        $w=($_POST['itemname']);
        $x=($_POST['itype']);
        $y=($_POST['available']);
        $z=($_POST['expiry']);
        $q="INSERT INTO grocery values('$v','$w','$x','$y','$z');";
        if($cc->query($q))
        {
            echo "details saved";
        } 
    }
    if(isset($_POST['s2']))
    {
        $sql="select * from grocery";
        $result = $cc->query($sql);
        echo "<center><br><br><br>";
        echo "<table border='1'><caption>LIST OF ENTRIES</caption><tr>
	    <td>itemcode</td>
	    <td>itemname</td>
	    <td>type</td>
        <td>Available quantity</td>
	    <td>Expiry</td>
	    </tr>";
        while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td> " . $row['itemcode']. "</td><td>" . $row['itemname']. "</td><td>" . $row['itype']. "</td><td>" .$row['available']."</td><td>".$row['expiry']."</td></tr>";
            }
        echo "</table>";
        echo "</center>";
    }
}
$cc->close();
?>
<?php
$conn=new mysqli("localhost","root","","billdetails");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);

}
$sql="select * from bill_tbl";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    echo "<table border='1'>
    <tr>
    <td>Item Id</td>
    <td>Item Name</td>
    <td>Price</td>
    </tr>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr><td>".$row["id"]."</td>
        <td>".$row["item"]."</td>
        <td>".$row["price"]."</td>
        </tr><br>";

    }
    echo "<table>";

}
else
{
    echo "0 result";
}
    $conn->close();
    ?>

<?php

$conn=mysqli_connect("localhost","root","","inventory");
if(!$conn)
{
	die("could not connect".mysql_error());
}
else
{
mysqli_select_db($conn,"inventory");
$sql="select * from stock";
mysqli_query($conn,$sql);
if($result=mysqli_query($conn,$sql))
	{
		while($row=mysqli_fetch_row($result))
                                                  {
echo "product id: " . $row[0]. " Name: " . $row[1].  "stk_aval: " . $row[2].”cost”.$row[3]. 
"<br>";
}
echo "<form action='d.php'>";
echo "Quantity (between 1 and 5):";
echo " <input type='number' name='quantity' min='1' max='10'>";
echo "  <input type='submit'>";
$a=$_GET['quantity'];
$sql="UPDATE stock
SET availability = availability +$a
where prod_id=$row[0]";
}
}
echo "<a href='manager2.html'> Go back </a>"
?>


<html>
<h1 align=center>
Cleaner schedule:</h1>

</html>

<?php
$a=mysqli_connect("localhost","root","","restaurant");
if(!$a){
	die("could not connect".mysql_error());
}
 else {
 	$sql="select * from cleaner";

$result=mysqli_query($a,$sql);

echo "<table border='1' align=center><tr><th>emp_id</th><th>time</th></tr>";

while($row=mysqli_fetch_row($result))
{
	
echo " <tr><td>$row[0] </td><td>$row[1]"; } 

echo "</table>";
}


?>

<?php

$conn=mysqli_connect("localhost","root","","restaurant");
if(!$conn){
	die("could not connect".mysql_error());
}
else
{
mysqli_select_db($conn,"restaurant");//dont think this line is needed
$sql="select * from user";
mysqli_query($conn,$sql);
echo "<center> <br> <a href='manager2.html'> Go back </a><br> <br> <br><table border=2> 
<tr> <th> NAME </th> <th> EMAIL </th></tr> ";
if($result=mysqli_query($conn,$sql))
	{
		while($row=mysqli_fetch_row($result))
                                                  {
	echo  "<tr><td> $row[0]</td> <td> $row[3]</td></tr> ";
}
}
}
$conn->close();
?>

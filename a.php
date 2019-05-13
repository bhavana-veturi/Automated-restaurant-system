<html>
<body bgcolor="lightblue"><h1><CENTER>EMPLOYEE DETAILS</h1></body></html>
<?php
$c=0;
$conn=mysqli_connect("localhost","root","","restaurant");
if(!$conn){
	die("could not connect".mysql_error());
}
else
{
mysqli_select_db($conn,"restaurant");
$sql="select * from emloyee";
$result=mysqli_query($conn,$sql);
echo "<center> <br> <a href='manager2.html'> Go back </a><br> <br> <br><table border=2> 
<tr> <td> ID </td><td> NAME </td> <td> DESIGNATION </td> <td> ADDRESS </td> <td> PHONE NUMBER </td><td> SALARY </td> <td> FIRE </td> </tr> ";

while($row=mysqli_fetch_row($result))
{				
				echo  "<tr><td> $row[0]</td> <td> $row[3]</td> <td>  $row[2]</td> <td>  $row[4]</td> <td> $row[5]</td> <td>  $row[6]</td> <td>";  
echo "<form name='f'' action='aa.php' method='GET' >";
echo "<input type='hidden' name='eid'  value='$row[0]'>";
echo "<input type= 'submit' value='FIRE'>";
echo "</form > </td></tr>";
}
	
	
				
	
}
?>
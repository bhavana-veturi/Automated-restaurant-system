<?php
$a=mysqli_connect("localhost","root","","restaurant");
$name=$_POST["t1"];
$pw=$_POST["t2"];

$x=mysqli_query($a,"select emp_id from emloyee");
$y=mysqli_query($a,"select password from emloyee");
while($q=mysqli_fetch_row($x) )
{
$w=mysqli_fetch_row($y);

if($name==$q[0] && $pw==$w[0])
{
$desig=$name[0].$name[1];
echo $desig; //. is for concatenating
switch($desig)
{
case "WA":
header("Location:waiter.php");
break;

case "BB":
header("Location:bb.php");
break;

case "CH":
header("Location:chef.php");
break;

case "MA":
header("Location:manager2.html");
break;

case "CA":
header("Location:cash.html");
break;

case "CL":
header("Location:cleaner.php");
break;
}
}
}
echo"<script language='Javascript'> alert('Invalid username or password please try again'); 
	location='elogin.html';</script>";
?>

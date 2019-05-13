<?php
//after ordering
$conn=mysqli_connect("localhost","root","","restaurant");
if(!$conn)
{
	die("could not connect".mysql_error());
}
else
{

$val=$_POST['c1'];
session_start();
$user= $_SESSION["username"];


if (isset($_POST['c1']))
{//from checklist of menu
	for($i=0;$i<sizeof($val);$i++)
	{
	$query="INSERT INTO  X (food_idc,username) VALUES ('$val[$i]','$user')";
	mysqli_query($conn, $query) or die("died".mysql_error());
	}
}
echo "Order done ";
}
?>
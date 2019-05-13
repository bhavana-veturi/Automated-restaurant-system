<?php
$conn=mysqli_connect("localhost","root","","restaurant");
if(!$conn){
	die("could not connect".mysql_error());
}
else
{
$del=$_GET['eid'];  //gets the table which is cleaned
		echo $del;
$sql = "DELETE FROM emloyee WHERE emp_id='$del'";

if ($conn->query($sql) === TRUE) {
    echo "Employee terminated successfully.";
    echo "<center> <br> <a href='manager2.html'> Go back </a><br>" ;
}}
?>
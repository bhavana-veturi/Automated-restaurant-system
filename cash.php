<?php
$u=$_GET["t1"];
$a=mysqli_connect("localhost","root","","restaurant");
$x=mysqli_query($a,"SELECT username FROM cashier");
$n=mysqli_query($a,"UPDATE cashier set status='paid' where username='$u'");
?>
<html><center>User status changed </center> </html>
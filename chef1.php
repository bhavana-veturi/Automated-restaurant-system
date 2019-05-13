<?php
$del=$_POST['delfood'];  //gets the name of food to be deleted
echo $del;
$a=mysqli_connect("localhost","root","","restaurant");
$sql="DELETE FROM X WHERE food_idc='$del'";
mysqli_query($a,$sql);
header("Location:chef.php");
?>
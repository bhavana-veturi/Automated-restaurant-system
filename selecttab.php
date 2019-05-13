<?php

$a=mysqli_connect("localhost","root","","restaurant");

$tno= $_POST["tab"];
echo $tno;
/*
<script language='Javascript'>
alert('ay');

a=document.getElementsByName('tab');
for(i=0;i<a.length;i++);
{
	if(a[i].checked)
		alert(a[i]);
}</script>";
*/


//start_session();
//$user=$_SESSION["username"];
 $sql="SELECT vacant FROM booking_table WHERE table_no='$tno'" ;
$vac=mysqli_query($a,$sql);
$m=mysqli_fetch_row($vac);
echo $m[0];
if($m[0]=='Yes')
{
$sql="UPDATE booking_table SET vacant='No' WHERE table_no='$tno'";
mysqli_query($a,$sql);//seperate line
$sql="UPDATE booking_table SET username_tab='' where table_no='$tno'";
mysqli_query($a,$sql);
header("Location:menupic.html"); //not sure about this
}
?>

<?php
$a1=$_GET["t1"];
$a2=$_GET["t2"];
$q1=strlen($a1);
$q2=strlen($a2);
$uname=$_GET["t4"];
if(($q1>19)||($q1<8)||($q2!=3)){
echo"<script language='Javascript'>
			alert('invalid card details');
			location='pay.html';</script>";
}
else{
echo "<script language='Javascript'>
			alert('payment accepted');</script>";
$a=mysqli_connect("localhost","root","","restaurant");
$amt=$_GET["t3"];
//$uname=username?;
$sql = "UPDATE  user SET account_bal=account_bal-'$amt' where Username='$uname'";
mysqli_query($a,$sql);
$sql="UPDATE cashier_view SET status='paid' where username_cash='$uname'";
mysqli_query($a,$sql);}

      
 
?>
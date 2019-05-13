<html><center><iframe sandbox="allow-same-origin allow-scripts allow-forms"
    src="pay.html" width="1500" height="2000" name="abc"></iframe></html>
 <?php
$a1=$_GET["t1"];
$a2=$_GET["t2"];
$a1=count($a1);
$a2=count($a2);
$uname=$_GET["t4"];
if(($a1>19)||($a1<8)||($a2!=3)){
echo"<script language='Javascript'>
			alert('invalid card details');</script>";
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
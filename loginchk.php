<?php
$user=$_GET["t1"];
$pw=$_GET["t2"];
$f=0;
$qwe=0;
//echo"yay";
//echo $user;
//session_start();
//$_SESSION["username"]=$user;
//echo $_SESSION["username"];
$conn=mysqli_connect("localhost","root","","restaurant");
if(!$conn) 
	die("Could not connect".mysql_error());
else
{
//echo"yay";
$sql="SELECT Username, password FROM user";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result))
{
	if(($user==$row[0] ) && ($pw==$row[1])) {
		$f+=1;}
}
//echo "alert($user)";
if($f==0)
{
	
	echo"<script language='Javascript'> alert('Invalid username or password please try again'); 
	location='ulogin.html';</script>";
  
	
 }
else
{
	//echo"yay";
    header("Location:postlogin.php");
}
}
?>





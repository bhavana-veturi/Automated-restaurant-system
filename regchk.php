<?php
$user=$_POST["t1"];
$pw=$_POST["t2"];
$email=$_POST["t3"];
$conn=mysqli_connect("localhost","root","");
if($conn) die("Could not connect".mysql_error());
else
{
$flag=0;
$a="SELECT `email` FROM `user`;";
$result=mysqli_query($conn,$a);
while($row=mysqli_fetch_row($result))
{
	if($t3==$row[0]) $flag=1;
}
if (flag==1) 
{
	?>
	<script> alert("Username already exist"); </script>
	<?php
	header("Location:ulogin.php");
}
else
$a="insert into user values('$t1','$t2',0,'$t3');";

?>




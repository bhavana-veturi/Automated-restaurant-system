<html>
<head>
<meta http-equiv="refresh" content="30">
</head>
<body style="background-color:white;"> 
<table style="background-color:white;">


<?php
$a=mysqli_connect("localhost","root","","restaurant");


$tot=0;
$sql="SELECT DISTINCT Username from X";
$userlist=mysqli_query($a,$sql); //list of all users with pending orders
while($m=mysqli_fetch_row($userlist))
{
$user=$m[0]; //selects individual customer
$sql="select food_idc from X where username= '$user'";
$food=mysqli_query($a,$sql); //food ids
$result=mysqli_query($a,$sql);
while($row=mysqli_fetch_row($food))
{
	$sql="SELECT price FROM food_det INNER JOIN X ON food_id= food_idc";
$result=mysqli_query($a,$sql); //prices of food ordered by that user
}

while($m=mysqli_fetch_row($result)) //to calculate total price
{
$tot+= $m[0];
}
$sql="select count(*) from cashier where username_cash='$user'";
$check= mysqli_query($a,$sql); //to see if username already exists
if($check==0) //if not, add the values into table
{
	$sql="insert into cashier(username_cash,status,t_price) values ('$user','not paid','$tot')";
mysqli_query($a,$sql);
}
else //otherwise update the preexisting price
{
$sql="select amount from cashier where username_cash='$user'";
$add=mysqli_query($a , $sql);
$tot+=$add;
$sql="update cashier set t_price='$add' where username_cash='$user'";
mysqli_query($a,$sql);
} 
}

//actual chef stuff
$sql="SELECT username,food_name,food_idc FROM X INNER JOIN food_det ON food_idc=food_id";
$result=mysqli_query($a,$sql);

echo "<table border='1'><tr><th>Food Name</th><th>Complete</th></tr>";



while($row=mysqli_fetch_row($result))
{
	echo $row[2];
echo "<tr><td>'$row[1]'</td><td>
<form name='f1'action='chef1.php' method='POST'>
<input type='hidden' name='delfood' value='$row[2]'><input type=submit value='Complete'></form>";
}

echo "</table>";


?>

</table>
</body>
</html>

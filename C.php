<style>
h1{
text-align: center;
color: blue;
}
</style>
<body bgcolor="lightblue">
<h1> Vacant tables: </h1>
<?php
$conn=mysqli_connect("localhost","root","","restaurant");
if(!$conn){
	die("could not connect".mysql_error());
}
else
{

//mysqli_select_db($conn,"restaurant");
?> <center>  <a href='manager2.html'> Go back  </a> <br><br> 
	<table border=2> 
<tr> <td> TABLE NUMBERS </td></tr> <?php
$sql="SELECT table_no  FROM booking_table WHERE vacant='YES'"; 
$result = mysqli_query($conn,$sql); 
while($row=mysqli_fetch_row($result))
                                                  {
echo "<tr><td align= 'center'> $row[0] </td></tr>";
}

}
echo "</table>";
$conn->close();

?>


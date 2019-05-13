<style>
h1{
text-align: center;
color: blue;
}
</style>
<body bgcolor="lightblue">
<h1> Occupied tables: </h1>
<?php
$conn=mysqli_connect("localhost","root","","restaurant");
if(!$conn){
	die("could not connect".mysql_error());
}
else
{
?>  <center>
	<table border=2 > 
<tr> <td> TABLE NUMBERS </td> <td> Username</td></tr> <?php
$sql="SELECT table_no,username_tab FROM booking_table WHERE vacant='No'"; 
$result = mysqli_query($conn,$sql); 
while($row=mysqli_fetch_row($result))
                                                  {
echo "<tr><td align= 'center'> $row[0] </td><td> $row[1] </td></tr>";
}

}
echo "</table>";
$conn->close();

?>
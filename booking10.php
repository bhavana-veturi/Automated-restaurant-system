<?php
$a=mysqli_connect("localhost","root","","restaurant");
if(!$a){
	die("could not connect".mysql_error());
}
 else { ?>
<body style="background-color:white;">   
<h1 style="color:gold; text-align:center">Choose Table</h1>
<form name="f1" action="selecttab.php" method="post">
<table border="1" style="width:100%;height:90%;">
<tr>
 
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t1' ");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t1";
?>
<td border="1" align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 1</td>

<?php else:  ?>
<td border="1" align="center" bgcolor="red">TABLE 1</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 


<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t2'");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t2";
?>
<td border="1" align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 2</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 2</td>
<?php endif; ?>
 
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t3'");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t3";
?>
<td border="1" align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 3</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 3</td>
<?php endif; ?>
</tr>
 
<tr><td  style="color:white;border-color:white;">blank</td></tr>
 
<tr>
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t4'");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t4";
?>
<td border="1" align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 4</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 4</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t5'");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t5";
?>
<td border=1 align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 5</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 5</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t6'");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t6";
?>
<td border="1" align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 6</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 6</td>
</tr>
<?php endif; ?>
<tr><td  style="color:white;border-color:white;">blank</td></tr>
 
<tr>
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t7'");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t7";
?>
<td border="1" align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 7</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 7</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t8'");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t8";
?>
<td border=1 align="center" bgcolor="green">
<input type=submit value='Book'><TABLE 8</td>
<?php  else: ?>
<td border="1" align="center" bgcolor="red">TABLE 8</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac2=mysqli_query($a,"select vacant from booking_table where table_no='t9' ");
$vac1=mysqli_fetch_row($vac2);
$vac=$vac1[0];
if($vac=="Yes"): $z="t9";
?>
<td border="1" align="center" bgcolor="green">
<input type=submit value='Book'><br>TABLE 9</td>

<?php else:  ?>
<td border="1" align="center" bgcolor="red">TABLE 9</td>
<?php  ?>
<td  style="color:white;border-color:white;">blank</td>
<?php endif;

echo "<input type='hidden' name='tablenum' value='$z'>";

 } ?>

</form>
</table>

 

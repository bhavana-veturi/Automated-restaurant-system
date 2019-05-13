<?php
$a=mysqli_connect("localhost","root","","restaurant");
?>
 
<body style="background-color:white;">   
<h1 style="color:blue; text-align:center">Choose Table</h1>
<form name="f1" action="selecttab.php" method="POST">
<table border="1" style="width:100%;height:90%;">
<tr>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t1'"); 
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0]; 	
if($vac2=="Yes"): 
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" value="t1">TABLE 1</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 1</td>
<?php endif; ?>
 
<td  style="color:white;border-color:white;">blank</td> 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t2'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes"):
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" value="t2">TABLE 2</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 2</td>
<?php endif; ?>
 
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t3'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes"):
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" value="t3">TABLE 3</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 3</td>
<?php endif; ?>
</tr>
 
<tr><td  style="color:white;border-color:white;">blank</td></tr>
 
<tr>
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t4'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes") : 
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" value="t4">TABLE 4</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 4</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t5'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes"):
?>
<td border=1 align="center" bgcolor="green"><input type="radio" name="tab" value="t5">TABLE 5</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 5</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t6'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes"):
?>
<td border="1" align="center" bgcolor="green"><input type="radio" name="tab" value="t6">TABLE 6</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 6</td>
<?php endif; ?>
</tr>
 
<tr><td  style="color:white;border-color:white;">blank</td></tr>
 
<tr>
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t7'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes"):
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" value="t7">TABLE 7</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 7</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t8'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes"):
?>
<td border=1 align="center" bgcolor="green"><input type="radio" name="tab" value="t8">TABLE 8</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 8</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t9'");
$vac1=mysqli_fetch_row($vac);
$vac2=$vac1[0];
if($vac2=="Yes"):
?>
<td border="1" align="center" bgcolor="green"><input type="radio" name="tab" value="t9">TABLE 9</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 9</td>
<?php endif; 

?>
</tr>
 
<tr><td colspan="5" align="center"><input type="Submit" value="Book" onclick="rad()"></td></tr>
</form>
</table>
</body>
</html>
 <script language='Javascript'>
//alert('ay');
/*function rad()
{
a=document.getElementsByName('tab'); 
int i=0;
for(i=0; i<a.length; i++);
{
	alert(i);
	alert(a.length);
	if(a[i].checked)
		document.write("<input type='hidden' value= 'a[i].value' name='tab'>");
}
} */
</script>";

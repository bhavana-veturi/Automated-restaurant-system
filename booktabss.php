<?php
$a=mysqli_connect("localhost","root","","restaurant");
?>
 
<body style="background-color:white;">   //change whatever
<h1 style="color:gold; text-align:center">Choose Table</h1>
<form name="f1" action="selecttab.php" method="get">
<table border="1" style="width:100%;height:90%;">
<tr>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t1'");  	
if($vac=="Yes"):  
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" id="t1">TABLE 1</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 1</td>
<?php endif; ?>
 
<td  style="color:white;border-color:white;">blank</td> //change this to whatever background colour you’re using
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t2'");
if($vac=="Yes"):
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" id="t2">TABLE 2</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 2</td>
<?php endif; ?>
 
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t3'");
if($vac=="Yes"):
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" id="t3">TABLE 3</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 3</td>
<?php endif; ?>
</tr>
 
<tr><td  style="color:white;border-color:white;">blank</td></tr>
 
<tr>
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t4'");
if($vac=="Yes") :?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" id="t4">TABLE 4</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 4</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t5'");
if($vac=="Yes"):
?>
<td border=1 align="center" bgcolor="green"><input type="radio" name="tab" id="t5">TABLE 5</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 5</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t6'");
if($vac=="Yes"):
?>
<td border="1" align="center" bgcolor="green"><input type="radio" name="tab" id="t6">TABLE 6</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 6</td>
<?php endif; ?>
</tr>
 
<tr><td  style="color:white;border-color:white;">blank</td></tr>
 
<tr>
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t7'");
if($vac=="Yes"):
?>
<td border="1" align="center" bgcolor="green">
<input type="radio" name="tab" id="t7">TABLE 7</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 7</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t8'");
if($vac=="Yes"):
?>
<td border=1 align="center" bgcolor="green"><input type="radio" name="tab" id="t8">TABLE 8</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 8</td>
<?php endif; ?>
<td  style="color:white;border-color:white;">blank</td>
 
<?php
$vac=mysqli_query($a,"select vacant from booking_table where table_no='t9'");
if($vac=="Yes"):
?>
<td border="1" align="center" bgcolor="green"><input type="radio" name="tab" id="t9">TABLE 9</td>
<?php else: ?>
<td border="1" align="center" bgcolor="red">TABLE 9</td>
<?php endif; ?>
</tr>
 
<tr><td colspan="5" align="center"><input type="Submit" value="Book"></td></tr>
</form>
</table>
</body>
</html>

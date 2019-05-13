<?php
$conn = mysqli_connect("localhost","root", "","restaurant");
            if (!$conn) {
                die(mysqli_error());
            }
else
{
		$del=$_GET['cltab'];  //gets the table which is cleaned
$sql = "DELETE FROM cashier_view WHERE username_cash='$del'";
echo $del;
	   mysqli_query($conn,$sql);
		mysqli_query($conn,"Update booking_table  SET vacant='Yes' where username_tab='$del'");
echo"nay";
}
?>
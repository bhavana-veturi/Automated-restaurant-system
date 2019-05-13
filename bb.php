<head>
<style>
body {
padding: 0;
margin: 0;
}
#uptop { 
   width:100%; 
   height: 30%; 
}

#bottom { 
   width:100%; 
   height:70%; 
   background:IndianRed; 

}

</style>
<div id="uptop">
<style>
h1 {
    color: white;
    text-align: center;
	 vertical-align: text-middle;
	

        border: 4px
	margin: auto;
        width: 99%;
        padding-top: 50px;
    
    padding-left: 15px;
}
h2 {
    color: white;
    text-align: center;
	 vertical-align: text-middle;
	

        border: 2px
	margin: auto;
        width: 99%;
	padding-top: 0px;
    
    padding-left: 15px;
}
p {

    font-family: verdana;
    font-size: 50px;
}
</style>
</head>
<body background="bg1.jpg">
<h1>ABC Bistro</h1><h2> (Busboy Login)</h2>
</div>

<DIV id="bottom">

<center>
<meta http-equiv="refresh" content="30">
<table border=2 style= "text-align:center">
 
        <tbody>
<th colspan=2> Tables to be cleaned </th>
<?php   
            $conn = mysqli_connect("localhost","root", "","restaurant");
            if (!$conn) {
                die(mysqli_error());
            }
           else
{
            $results = mysqli_query($conn, "SELECT table_no, username_tab FROM booking_table INNER JOIN cashier_view WHERE username_cash=username_tab AND status='paid' ");

      
            while($row = mysqli_fetch_row($results)) {
            ?>
                <tr>
                    <td><?php echo $row[0] ?></td> 
                    <?php echo "<td><form name='f'' action='bb1.php'  method='get'>";
echo  " <input type='hidden' name='cltab'  value='$row[1]'>";
echo "<input type='submit' value='Cleaned'>";echo "</form>";  ?>
 		</td> </tr>

<?php            } }?>
            </tbody>
</table>


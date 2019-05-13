<?php
$a=mysqli_connect("localhost","root","","a");
if (!$a) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO X (price,Username)
VALUES (12, 'ayy')";

if ($a->query($sql) === TRUE) {
    echo "New record created successfully";
}
$sql = "SELECT price,Username FROM X";
$result = $a->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "price: " . $row["price"]. " Name: " . $row["Username"]."<br>" 
;}
}
?>
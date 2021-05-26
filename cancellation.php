<?php
$mysqli = new mysqli("localhost", "root", "", "hotel reservation system");
 if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 

$Customer_ID = $mysqli->real_escape_string($_REQUEST['Customer_ID']);
$Booking_ID = $mysqli->real_escape_string($_REQUEST['Booking_ID']);
$Reason= $mysqli->real_escape_string($_REQUEST['Reason']);
$CancelTime= $mysqli->real_escape_string($_REQUEST['CancelTime']);



$sql = "INSERT INTO cancellation(Customer_ID,Booking_ID,Reason,CancelTime) VALUES ('$Customer_ID','$Booking_ID','$Reason','$CancelTime')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
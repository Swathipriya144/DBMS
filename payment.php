<?php
$mysqli = new mysqli("localhost", "root", "", "hotel reservation system");
 if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 

$Customer_ID = $mysqli->real_escape_string($_REQUEST['Customer_ID']);
$Booking_ID = $mysqli->real_escape_string($_REQUEST['Booking_ID']);
$TotalAmount= $mysqli->real_escape_string($_REQUEST['TotalAmount']);
$PaidAmount= $mysqli->real_escape_string($_REQUEST['PaidAmount']);
$BalanceAmount= $mysqli->real_escape_string($_REQUEST['BalanceAmount']);
$PaymentMode= $mysqli->real_escape_string($_REQUEST['PaymentMode']);


$sql = "INSERT INTO payment(Customer_ID,Booking_ID,TotalAmount,PaidAmount,BalanceAmount,PaymentMode) VALUES ('$Customer_ID','$Booking_ID','$TotalAmount','$PaidAmount','$BalanceAmount','$PaymentMode')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
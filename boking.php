<?php
$mysqli = new mysqli("localhost", "root", "", "hotel reservation system");
 if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 

$Booking_ID = $mysqli->real_escape_string($_REQUEST['Booking_ID']);
$CheckIN = $mysqli->real_escape_string($_REQUEST['CheckIN']);
$CheckOUT= $mysqli->real_escape_string($_REQUEST['CheckOUT']);
$RoomNumber= $mysqli->real_escape_string($_REQUEST['RoomNumber']);
$Customer_ID= $mysqli->real_escape_string($_REQUEST['Customer_ID']);
$No_of_Nights= $mysqli->real_escape_string($_REQUEST['No_of_Nights']);
$BookType= $mysqli->real_escape_string($_REQUEST['BookType']);
$BookTime= $mysqli->real_escape_string($_REQUEST['BookTime']);

$sql = "INSERT INTO bokings(Booking_ID,CheckIN,CheckOUT,RoomNumber,Customer_ID,No_of_Nights,BookType,BookTime) VALUES ('$Booking_ID','$CheckIN','$CheckOUT','$RoomNumber','$Customer_ID','$No_of_Nights','$BookType','$BookTime')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 


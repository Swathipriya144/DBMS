<?php
$mysqli = new mysqli("localhost", "root", "", "hotel reservation system");
 if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 

$Customer_ID = $mysqli->real_escape_string($_REQUEST['Customer_ID']);
$Name = $mysqli->real_escape_string($_REQUEST['Name']);
$Address= $mysqli->real_escape_string($_REQUEST['Address']);
$City= $mysqli->real_escape_string($_REQUEST['City']);
$Pin= $mysqli->real_escape_string($_REQUEST['Pin']);
$State= $mysqli->real_escape_string($_REQUEST['State']);
$Email= $mysqli->real_escape_string($_REQUEST['Email']);
$PhoneNumber= $mysqli->real_escape_string($_REQUEST['PhoneNumber']);
$RegTime= $mysqli->real_escape_string($_REQUEST['RegTime']);

$sql = "INSERT INTO customers(Customer_ID,Name,Address,City,Pin,State,Email,PhoneNumber,RegTime) VALUES ('$Customer_ID','$Name','$Address','$City','$Pin','$State','$Email','$PhoneNumber','$RegTime')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}



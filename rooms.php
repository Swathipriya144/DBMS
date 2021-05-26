<?php
$con=mysqli_connect("localhost","root","","hotel reservation system");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM rooms");

echo "<table border='1'>
<tr>
<th>RoomNumber</th>
<th>RoomType</th>
<th>Price/Night</th>
<th>MaxPersons</th>
<th>Reserved</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['RoomNumber'] . "</td>";
echo "<td>" . $row['RoomType'] . "</td>";
echo "<td>" . $row['Price/Night'] . "</td>";
echo "<td>" . $row['MaxPersons'] . "</td>";
echo "<td>" . $row['Reserved'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
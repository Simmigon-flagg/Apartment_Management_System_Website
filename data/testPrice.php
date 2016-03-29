<?php
include 'dbConnect.php';

$sql = "SELECT * FROM apartmentprice;";
$result = $conn->query($sql);

/*
if ($result->num_rows > 0) {
    echo "<table>
	<tr>
	<th>ID</th>
	<th>One Bedroom</th>
	<th>Two Bedroom</th>
	<th>Three Bedroom</th>
	<th>Apartment Name</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>". $row["idapartmentPrice"]."</td>
		<td>" . $row["onebedroom"]."</td>
		<td>" . $row["twobedroom"] . "</td>
		<td>" . $row["threebedroom"] ."</td>
		<td>" . $row["apartmentName"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

Table: apartmentprice
Columns:
idapartmentPrice int(11) AI PK 
onebedroom varchar(11) 
twobedroom varchar(11) 
threebedroom varchar(11) 
apartmentName varchar(11)
*/

if ($result->num_rows > 0) {
    echo '<table align="left"
	cellspacing="5" cellpadding="8">
	
	<tr><td align="left"><b>ID</b></td>
	<td align="left"><b>One Bedroom</b></td>
	<td align="left"><b>Two Bedroom</b></td>
	<td align="left"><b>Three Bedroom</b></td>
	<td align="left"><b>Apartment Name</b></td></tr>';
	
	while($row = $result->fetch_assoc()){
		
		echo '<tr><td align="left">' .
		$row['idapartmentPrice'] . '</td><td align="left">' .
		$row['onebedroom'] . '</td><td align="left">' .
		$row['twobedroom'] . '</td><td align="left">' .
		$row['threebedroom'] . '</td><td align="left">' .
		$row['apartmentName'] . '</td><td align="left">';
		
		echo '</tr>';
	}
	
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>


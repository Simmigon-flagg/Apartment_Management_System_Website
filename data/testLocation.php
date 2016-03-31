<?php
include 'dbConnect.php';

$sql = "SELECT * FROM apartmentlocation;";
$result = $conn->query($sql);
/*
Table: apartmentlocation
Columns:
idapartmentlocation int(11) AI PK 
iduser varchar(45) 
location varchar(45) 
aptNumber varchar(45) 
numberOfBedrooms varchar(45) 
price varchar(45)
*/
if ($result->num_rows > 0) {
    echo '<table align="left"
	cellspacing="5" cellpadding="8">

	<tr><td align="left"><b>Apartment Location ID</b></td>
	<td align="left"><b>User ID</b></td>
	<td align="left"><b>Location</b></td>
	<td align="left"><b>Apartment Number</b></td>
	<td align="left"><b>Number of Bedrooms</b></td>
	<td align="left"><b>Price</b></td></tr>';
	
	while($row = $result->fetch_assoc()){
		
		echo '<tr><td align="left">' .
		$row['idapartmentlocation'] . '</td><td align="left">' .
		$row['iduser'] . '</td><td align="left">' .
		$row['location'] . '</td><td align="left">' .
		$row['aptNumber'] . '</td><td align="left">' .
		$row['numberOfBedrooms'] . '</td><td align="left">' .
		$row['price'] . '</td><td align="left">';
		
		echo '</tr>';
	}
	
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>


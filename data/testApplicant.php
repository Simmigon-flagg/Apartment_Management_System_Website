<?php
include 'dbConnect.php';

$sql = "SELECT * FROM applicant;";
$result = $conn->query($sql);
/*
Table: applicant
Columns:
idapplicant int(11) AI PK 
iduser int(11) 
accepted int(1) UN 
socialSecurity varchar(45) 
streetAddress varchar(45) 
City varchar(45) 
Zip varchar(45) 
phoneNumber varchar(45) 
employedBy varchar(45) 
JobTitle varchar(45) 
monthlyGrossPay varchar(45) 
criminalBackgroundCheck varchar(45)
*/
if ($result->num_rows > 0) {
    echo '<table align="left"
	cellspacing="5" cellpadding="8">

	<tr><td align="left"><b>Applicant ID</b></td>
	<td align="left"><b>User ID</b></td>
	<td align="left"><b>Accepted</b></td>
	<td align="left"><b>Social Security Number</b></td>
	<td align="left"><b>Address</b></td>
	<td align="left"><b>City</b></td>
	<td align="left"><b>Zip</b></td>
	<td align="left"><b>Phone Number</b></td>
	<td align="left"><b>Employed By</b></td>
	<td align="left"><b>Job Title</b></td>
	<td align="left"><b>Monthly Gross Pay</b></td>
	<td align="left"><b>Criminal Background Check</b></td></tr>';
	
	while($row = $result->fetch_assoc()){
		
		echo '<tr><td align="left">' .
		$row['idapplicant'] . '</td><td align="left">' .
		$row['iduser'] . '</td><td align="left">' .
		$row['accepted'] . '</td><td align="left">' .
		$row['socialSecurity'] . '</td><td align="left">' .
		$row['streetAddress'] . '</td><td align="left">' .
		$row['City'] . '</td><td align="left">' .
		$row['Zip'] . '</td><td align="left">' .
		$row['phoneNumber'] . '</td><td align="left">' .
		$row['employedBy'] . '</td><td align="left">' .
		$row['JobTitle'] . '</td><td align="left">' .
		$row['monthlyGrossPay'] . '</td><td align="left">' .
		$row['criminalBackgroundCheck'] . '</td><td align="left">';
		
		echo '</tr>';
	}
	
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>


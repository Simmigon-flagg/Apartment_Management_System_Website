<?php
include 'dbConnect.php';

$sql = "SELECT * FROM user;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table align="left"
	cellspacing="5" cellpadding="8">
	
	<tr><td align="left"><b>User ID</b></td>
	<td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td>
	<td align="left"><b>Username</b></td>
	<td align="left"><b>Date of Birth</b></td>
	<td align="left"><b>Password</b></td></tr>';
	
	while($row = $result->fetch_assoc()){
		
		echo '<tr><td align="left">' .
		$row['iduser'] . '</td><td align="left">' .
		$row['firstName'] . '</td><td align="left">' .
		$row['lastName'] . '</td><td align="left">' .
		$row['userName'] . '</td><td align="left">' .
		$row['dateOfBirth'] . '</td><td align="left">' .
		$row['pass'] . '</td><td align="left">';
		
		echo '</tr>';
	}
	
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

/*
if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idApplicant"].
		" - First Name: " . $row["firstName"].
		" Last Name: " . $row["lastName"] . 
		" Username: " . $row["userName"] .
		" Birthdate: " . $row["dateOfBirth"] .
		" Password: " . $row["password"] .
		" Social Security: " . $row["socialSecurity"] . "<br>";
    }
	
} else {
    echo "0 results";
}

if ($result->num_rows > 0) {
    echo "<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th></th>
	<th>Username</th>
	<th>Birthdate</th>
	<th>Password</th>
	<th>Social Security</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>". $row["idApplicant"]."</td>
		<td>" . $row["firstName"]."</td>
		<td>" . $row["lastName"] . "</td>
		<td>" . $row["userName"] ."</td>
		<td>" . $row["dateOfBirth"] ."</td>
		<td>" . $row["password"] ."</td>
		<td>" . $row["socialSecurity"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

Table: applicanttable
Columns:
idApplicant int(11) AI PK 
firstName varchar(45) 
lastName varchar(45) 
userName varchar(45) 
dateOfBirth varchar(45) 
password varchar(45) 
socialSecurity varchar(45)
*/
?>


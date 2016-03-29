<!DOCTYPE html>
<html>
	<head>
		<title>SELECT</title>
	</head>
	<body>
		<a href="../index.php"><h3>Home</h3></a>
		<p>This is a paragraph.</p>
	</body>
</html>
<?php
include 'dbConnect.php';
$sql = "SELECT * FROM applicanttable INNER JOIN usertable ON applicanttable.idApplicant = usertable.idApplicant;";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo '<table align = "left" cellspacing = "5" cellpadding="8">
	<tr>
	<th align="left">ID</th>
	<th align="left">Name</th>
	<th></th>
	<th align="left">Username</th>
	<th align="left">Birthdate</th>
	<th align="left">Password</th>
	<th align="left">Address</th>
	<th align="left">Phone Number</th>
	<th align="left">Employed by</th>
	<th align="left">Occupation</th>
	<th align="left">Monthly Gross Pay</th>
	<th align="left">Criminal Background Check</th>
	<th align="left">Apartment Name</th>
	<th align="left">Number of Rooms</th>
	<th align="left">Social Security Number</th>
	
	
	</tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>" . $row["iduser"]."</td>
		<td>" . $row["firstName"]."</td>
		<td>" . $row["lastName"] . "</td>
		<td>" . $row["userName"] ."</td>
		<td>" . $row["dateOfBirth"] ."</td>
		<td>" . $row["password"] ."</td>
		<td>" . $row["address"]."</td>
		<td>" . $row["phoneNumber"]."</td>
		<td>" . $row["employedBy"] . "</td>
		<td>" . $row["occupation"] ."</td>
		<td>" . $row["monthlyGrossPay"] ."</td>
		<td>" . $row["criminalBackgroundCheck"] ."</td>
		<td>" . $row["apartmentName"]."</td>
		<td>" . $row["numberOfRooms"]."</td>
		<td>" . $row["socialSecurity"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
/*

Table: usertable
Columns:
iduser int(11) AI PK 
address varchar(45) 
emailAddress varchar(45) 
phoneNumber varchar(45) 
employedBy varchar(45) 
occupation varchar(45) 
monthlyGrossPay varchar(45) 
criminalBackgroundCheck varchar(45) 
idApplicant varchar(45) 
apartmentName varchar(45) 
numberOfRooms varchar(45)

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>Person:</h1><br>".
		"id:&nbsp&nbsp".$row["idApplicant"]."<br><br>". 
		"firstName:&nbsp&nbsp".$row["firstName"]."<br><br>". 
		"lastName:&nbsp&nbsp".$row["lastName"]."<br><br>". 
		"userName:&nbsp&nbsp".$row["userName"]."<br><br>". 
		"dateOfBirth:&nbsp&nbsp".$row["dateOfBirth"]."<br><br>".
		"password:&nbsp&nbsp".$row["password"]."<br><br>".
		"socialSecurity:&nbsp&nbsp".$row["socialSecurity"]."<br><br>
		<h1>User:</h1><br>".
		"address:&nbsp&nbsp".$row["address"]."<br><br>".
		"emailAddress:&nbsp&nbsp".$row["emailAddress"]."<br><br>".
		"phoneNumber:&nbsp&nbsp".$row["phoneNumber"]."<br><br>".
		"employedBy:&nbsp&nbsp".$row["employedBy"]."<br><br>".
		"monthlyGrossPay:&nbsp&nbsp".$row["monthlyGrossPay"]."<br><br>". 
		"criminalBackgroundCheck:&nbsp&nbsp".$row["criminalBackgroundCheck"]."<br><br>".
		"<hr />";
    }
} else {
    echo " 0 results";
}
$conn->close();
*/
?>
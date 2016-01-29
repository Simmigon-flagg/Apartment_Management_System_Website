<!DOCTYPE html>
<html>
	<head>
		<title>SELECT</title>
	</head>
	<body>
		<a href="../index.html"><h3>Home</h3></a>
		<p>This is a paragraph.</p>
	</body>
</html>
<?php
include 'dbConnect.php';
$sql = "SELECT * FROM applicant INNER JOIN user
ON applicant.idApplicant = user.idApplicant;";
$result = $conn->query($sql);

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
		"dateOfBirth:&nbsp&nbsp".$row["dateOfBirth"]."<br><br>".
		"monthlyGrossPay:&nbsp&nbsp".$row["monthlyGrossPay"]."<br><br>". 
		"criminalBackgroundCheck:&nbsp&nbsp".$row["criminalBackgroundCheck"]."<br><br>".
		"<hr />";
    }
} else {
    echo " 0 results";
}
$conn->close();
?>
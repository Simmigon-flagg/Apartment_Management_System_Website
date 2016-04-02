<?php
$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "b397f6ac809d08";
$password = "4131b78e89f4fa9";
$dbname = "ApartrmentRentalDB";

// Create connection
		/* new mysqli*/
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
else {
	echo "Test Database Connection";
}
*/
?>

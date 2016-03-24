<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "apartrmentrentaldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "Connection</br>";
}
$sql = "SELECT * FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idClient"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo " 0 results";
}
$conn->close();
?>
 <?php
/*$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "b397f6ac809d08";
$password = "4131b78e89f4fa9";
$dbname = "ApartrmentRentalDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "Connected </br>";
}
$sql = "SELECT * FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idClient"]. " - Name: " . $row["userNane"]. " " . $row["password"]. "<br>";
    }
} else {
    echo " 0 results";
}
$conn->close();
*/?> 
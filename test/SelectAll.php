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
$sql = "SELECT * FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idClient"]. "<br>User name: " . $row["userName"]. "<br>Password: " . $row["password"]. "<br><hr />";
    }
} else {
    echo " 0 results";
}
$conn->close();
?>
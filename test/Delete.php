<!DOCTYPE html>
<html>
	<head>
		<title>DELETE</title>
	</head>
	<body>
		<a href="../index.html"><h3>Home</h3></a>
		<p>This is a paragraph.</p>
		<hr />
	</body>
</html>
<?php
include 'dbConnect.php';
$sql = "DELETE FROM client";

if ($conn->query($sql) === TRUE) {
    echo "All Records are deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
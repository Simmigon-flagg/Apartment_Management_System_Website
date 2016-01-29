<!DOCTYPE html>
<html>
	<head>
		<title>Update All</title>
	</head>
	<body>
		<a href="../index.html"><h3>Home</h3></a>
		<p>This is a paragraph.</p>
		<hr />
	</body>
</html>
<?php
include 'dbConnect.php';
$sql = "UPDATE applicant SET password ='QwfWgy3f'";

if ($conn->query($sql) === TRUE) {
    echo "All Records updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
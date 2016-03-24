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
$sql = "DELETE FROM applicant";

if ($conn->query($sql) === TRUE) {
    echo "All applicant Records are deleted successfully<br >";
} else {
    echo "Error deleting applicant record: " . $conn->error;

}
$sql = "DELETE FROM user";

if ($conn->query($sql) === TRUE) {
    echo "All user Records are deleted successfully";
} else {
    echo "Error deleting user record: " . $conn->error;
}


$conn->close();
?>
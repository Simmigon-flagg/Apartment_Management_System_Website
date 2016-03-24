<!DOCTYPE html>
<html>
	<head>
		<title>INSERT</title>
	</head>
	<body>
		<a href="../index.html"><h3>Home</h3></a>
		<p>This is a paragraph.</p>
	</body>
</html>
<?php
	include 'dbConnect.php';
	// set parameters and execute
	$firstNameFromWebsite = "admin";
	$lastNameFromWebsite = "admin";
	$userNameFromWebsite = "admin";
	$dateOfBirthFromWebsite = "01/01/0000";
	$passwordFromWebsite = "admin";
	$socialSecurityFromWebsite = "111-111-1111";
	//$FKidClient = "";


	$sql = "INSERT INTO applicant
(
firstName,
lastName,
userName,
dateOfBirth,
password,
socialSecurity
)
VALUES
(
'{$firstNameFromWebsite}',
'{$lastNameFromWebsite}',
'{$userNameFromWebsite}',
'{$dateOfBirthFromWebsite}',
'{$passwordFromWebsite}',
'{$socialSecurityFromWebsite}');
";

//get the last key
$last_id = null;
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
	 echo "added person";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error."<br>";
}

	$addressFromWebsite = "admin street";
	$emailAddressFromWebsite = "admin@example.com";
	$phoneNumberFromWebsite = "000-000-0000";
	$employedByFromWebsite = "admin home";
	$occupationFromWebsite = "admin Software Developer";
	$monthlyGrossPayFromWebsite = "0.00";
	$criminalBackgroundCheckFromWebsite = "Yes";

$sql = "INSERT INTO user
(
address,
emailAddress,
phoneNumber,
employedBy,
occupation,
monthlyGrossPay,
criminalBackgroundCheck,
idApplicant)
VALUES
(
'{$addressFromWebsite}',
'{$emailAddressFromWebsite}',
'{$phoneNumberFromWebsite}',
'{$employedByFromWebsite}',
'{$occupationFromWebsite}',
'{$monthlyGrossPayFromWebsite}',
'{$criminalBackgroundCheckFromWebsite}',
'{$last_id}');
";

if ($conn->query($sql) === TRUE) {	
    echo "<br>added user ";
}else{
	 echo "Error: " . $sql . "<br>" . $conn->error;
}

	$conn->close();
?>
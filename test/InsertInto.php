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
	$firstNameFromWebsite = "Simmigon";
	$lastNameFromWebsite = "Flagg";
	$userNameFromWebsite = "SimmDaMan";
	$dateOfBirthFromWebsite = "09061980";
	$socialSecurityFromWebsite = "2222222222";
	$emailAddressFromWebsite = "blankexamplecom";
	$passwordFromWebsite = "QrYwRh21Q";
	$cellNumberFromWebsite = "4044044040";
	$homeNumberFromWebsite = "7707707770";
	$addressFromWebsite = "123 Fake St Atlanta Ga 99999";
	$employedByFromWebsite = "Google";
	$occupationFromWebsite = "Software Developer";
	$monthlyGrossPayFromWebsite = "89000000";
	$criminalBackgroundCheckFromWebsite = "Yes";

	$sql = "INSERT INTO client
(
firstName,
lastName,
userName,
dateOfBirth,
socialSecurity,
emailAddress,
password,
cellNumber,
homeNumber,
address,
employedBy,
occupation)
VALUES
(
'<{$firstNameFromWebsite}>',
'{$lastNameFromWebsite}',
'{$userNameFromWebsite}',
'{$dateOfBirthFromWebsite}',
'{$socialSecurityFromWebsite}',
'{$emailAddressFromWebsite}',
'{$passwordFromWebsite}',
'{$cellNumberFromWebsite}',
'{$homeNumberFromWebsite}',
'{$addressFromWebsite}',
'{$employedByFromWebsite}',
'{$occupationFromWebsite}');
";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
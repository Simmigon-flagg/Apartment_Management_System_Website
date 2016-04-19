<?php include("userHeader.php");

//var_dump($_REQUEST); 	
   
$login_aptNumber = "";
$login_location = "";
$result = mysqli_query($conn,"select * from apartmentlocation where iduser = '$login_session' ");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$login_price = $row['price'];
$test_price = $login_price - $row['apr'];

if($count == 1) {
	$login_aptNumber = "Apt. " . $row['aptNumber'];
	$login_location = $row['location'];
}

if(isset($_GET['submit'])) {
	//echo "TEST";
	if(mysqli_query($conn, "UPDATE apartmentlocation SET apr='$login_price' WHERE iduser = '$login_session' ")){
		header("location:payInformation.php");
	}
}

mysqli_close($conn);
?>

<html>
<head>
<title>My First Website</title>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		<br>
		<div style="width: 600px; margin: 50px auto 0 auto;">
<div id = "applyNow">
		
<h1><p id="centerHeader"><font color= "black"> <b> View Pay System<b></font></p></h1>

<div style="width: 600px; margin: 50px auto 0 auto;">

<h2><p id="centerHeader"><font color= "black"> You are currently residing at:<br> <?php echo $login_location . " " . $login_aptNumber ?><p id="centerHeader"><font color= "black"></h2> 
<h3  style="color:white;"></h3>
<h3> Your rent for April 2016 is:<h3> <form> 
<h2> <?php echo "$" . $test_price ?> </h2>

<br>
<form method="POST" action="">
<button class="btn btn-default" type="submit" name="submit">Proceed to complete the payment</button>
</form>
</div>
</div>


<?php include("footer.php");?>


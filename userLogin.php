<?php include("userHeader.php");
mysqli_close($conn);
//include('session.php');
//echo 'Welcome, ' .$login_session , '!';          //for testing. prints user's first name
$to      = 'forrestwong9@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
       'Reply-To: webmaster@example.com';

mail($to, $subject, $message, $headers);
?>

<html>

<title>My First Website</title>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		<div style="width: 800px; margin: 50px auto 0 auto;">	
<div id = "applyNow">
<!-- <h2><p id="centerHeader"><font color= "black"> <a href = "logout.php">Sign Out</a></p></h2> -->


<style>
   body{
     background: url(Images/userlog4.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
   } 
   </style> 

<p id="centerHeader"><font face="calibri" size="10px" color = "black"><b>WELCOME HOME</font></b></font></p>

	</div>
	<br>
	<br/><br/>
	
<div class="row text-center" >
      <div class="col-sm-4">
        <div class="thumbnail">
		 <font face="calibri" size="5px"><b><u>Rent</u></b></font><br><br>
 <img src = "Images/rentMoney.jpg" alt="Pay Rent" width="100" height="100">
<p><a class="btn" href="paySystem.php"> <button class="btn">Pay System</button> </a></p>
<p><a class="btn" href="vpBillHistory.php"> <button class="btn">View/Print Bill History</button> </a></p>
<br>
</div>	
</div>


      <div class="col-sm-4">
        <div class="thumbnail">
 <font face="calibri" size="5px"><b><u>Utilities</u></b></font><br><br>
 <img src = "Images/utility.jpg" alt="Paris" width="134" height="134">
<p><a class="btn" href="payThirdParty.php"> <button class="btn">Pay Third party</button> </a></p>
<!--<p><a class="btn" href="addNewUtility.php"> <button class="btn">Add New Utility</button></a></p> -->
<br><br>
</div>
</div>


      <div class="col-sm-4" >
        <div class="thumbnail">
 <font face="calibri" size="5px"><b><u>Maintenance</u></b></font></a><br><br>
 <img src = "Images/Maintenance.png" alt="Maintenance Request " width="70" height="70">

<p><a class="btn" href="addNewRequest.php"> <button class="btn">Add New Request</button> </a></p>
<p><a class="btn" href="viewMaintenanceHistory.php"> <button class="btn">View Maintenance History</button></a></p>
<br>
</div>
</div>	
</div>
</html>
<!-- /*$favcolor = "red";

switch ($favcolor) {
    case "red":
        $myfile = fopen("simmigon.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("simmigon.txt"));
		fclose($myfile);
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}*/
?> -->
<?php include("footer.php"); ?> 

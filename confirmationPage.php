<?php
include("header.php");
/*   include('data/dbConnect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select firstName from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstName'];*/
?>
<?php
	//echo 'Welcome, ' .$login_session , '!';          //for testing. prints user's first name
	session_start();
	session_destroy();
?>

<html>
<head>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
        <meta http-equiv="refresh" content="10;url=index.php" />
    <body>
        <center><h5>Redirecting you in 10 seconds...</h5></center>
    </body>
</html>
<div style="width: 160px; margin: 40px auto 0 auto;">
 <img src="images/checkmark.jpg" alt="check" width="150" height="150">
</div>
<div style="width: 1000px; margin: 40px auto 0 auto;">
<h2><p id="centerHeader">Thank you for applying to Luxe
<br>
<font size="4px">You have been sent a confirmation email<br>We look forward to reviewing your application and will contact you with a decision soon</font></h2></div>
<div style="width: 100px; margin: 40px auto 0 auto;">
<form action="index.php"> 
	<button type="submit" name="submit" class="btn btn-default">&nbsp;Home</button>
</form> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include("footer.php");?>


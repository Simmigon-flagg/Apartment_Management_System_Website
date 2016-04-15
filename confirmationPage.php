<?php include("header.php");
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

<div style="width: 100px; margin: 40px auto 0 auto;">
 <img src="images/checkmark.jpg" alt="check" width="150" height="150">
</div>
<div style="width: 1000px; margin: 40px auto 0 auto;">
<h2>You are one step ahead! You are now registered and have applied
 for an apartment! You will receive
 a confirmation email after we review your application.</h2> </div>

<?php include("footer.php");?>


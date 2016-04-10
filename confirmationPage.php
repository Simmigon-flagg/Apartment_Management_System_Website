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
	<br>You are now registered and have applied for an apartment! You will receive a confirmation email after we review your application.
<?php include("footer.php");?>


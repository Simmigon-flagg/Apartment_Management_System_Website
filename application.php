<?php  include_once("header.php");?>
<?php
	var_dump($_REQUEST); 				//remove
session_start();
if(isset($_SESSION['login_user'])!="")
{
 header("Location: userLogin.php");
}
include_once("data/dbConnect.php");
//$firstNameErr = $lastNameErr = $emailErr = $pwdErr = $pwdConfirmErr "";
$invalid = $passwordErr = $existing = "";

if(isset($_POST['submit']))
{
	
	if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['pwd']) || empty($_POST['pwdConfirm'])){
		$invalid = "All fields are required";
	}else{
		$firstname = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastname = mysqli_real_escape_string($conn,$_POST['lastName']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$pass = mysqli_real_escape_string($conn,$_POST['pwd']);
		$passConfirm = mysqli_real_escape_string($conn,$_POST['pwdConfirm']);
		
		$check = mysqli_query($conn,"SELECT userName FROM user WHERE userName = '$email';");	//checks for already existing email in table
		if (mysqli_num_rows($check) == 0) {

			 if($pass == $passConfirm){
			 
				 if(mysqli_query($conn,"INSERT INTO user(firstName, lastName, userName, pass) VALUES('$firstname','$lastname','$email','$pass')"))
				 {
						$_SESSION['login_user'] = $email;
						header("location:application2.php");

				 }
				 else
				 {
				  ?>
						<script>alert('Error while registering you...');</script>
						<?php
				 }
			}else {
					$passwordErr = "Passwords don't match";
			 }
		}else{
			$existing = "This email address is already registered";
		}
	}
}
?>

<html>
<head>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		
<h3 id="centerHeader" >Application</h3>
<h5 id="centerHeader">page 1 of 2</h5>

<center><b><font color = "red"><?php echo $invalid; ?></font></b></center>
<center><b><font color = "red"><?php echo $passwordErr; ?></font></b></center>
<center><b><font color = "red"><?php echo $existing; ?></font></b></center>

<div style="width: 600px; margin: 40px auto 0 auto;">
<form role="form" method="POST" action="">
  <div class="form-group">
    <label for="firstName">First Name:</label>
    <input type="firstName" class="form-control" name="firstName"><br>
  <div class="form-group">
    <label for="lastName">Last Name:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div>
 <!-- <div class="form-group">
    <label for="address">Current Address:</label>
    <input type="address" class="form-control" name="address">
   </div>
     <div class="form-group">
    <label for="city">City:</label>
    <input type="city" class="form-control" name="city">
   </div>
     <div class="form-group">
    <label for="state">State:</label>
    <input type="state" class="form-control" name="state">
   </div>
     <div class="form-group">
    <label for="zip">Zip:</label>
    <input type="zip" class="form-control" name="zip">
   </div>
 <div class="form-group">
    <label for="phone">Phone Number:</label>
    <input type="phone" class="form-control" name="phone">
  </div> -->
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>
    <div class="form-group">
    <label for="pwdConfirm">Re-Enter Password:</label>
    <input type="password" class="form-control" name="pwdConfirm">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Next</button>
</form>
</div>
<?php include_once("footer.php");?>
<?php  include_once("header.php");?>
<?php
	var_dump($_REQUEST); 				//remove
session_start();
if(isset($_SESSION['login_user'])!="")
{
 header("Location: userLogin.php");
}
include_once("data/dbConnect.php");

if(isset($_POST['submit']))
{
 $firstname = mysqli_real_escape_string($conn,$_POST['firstName']);
 $lastname = mysqli_real_escape_string($conn,$_POST['lastName']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $pass = mysqli_real_escape_string($conn,$_POST['pwd']);
 $passConfirm = mysqli_real_escape_string($conn,$_POST['pwdConfirm']);
 
 if($pass == $passConfirm){
 
 if(mysqli_query($conn,"INSERT INTO user(firstName, lastName, userName, pass) VALUES('$firstname','$lastname','$email','$pass')"))
 {
			 header("location:application2.php");

 }
 else
 {
  ?>
        <script>alert('Error while registering you...');</script>
        <?php
 }
}
 else {
	         ?>Passwords don't match<?php
 }
}
?>

<html>
<head>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		
<h3 id="centerHeader" >Application</h3>
<<<<<<< HEAD
<div style="width: 600px; margin: 40px auto 0 auto;">
<form role="form" method="POST" action="">
=======
<div style="width: 200px; margin: 100px auto 0 auto;">
<form role="form" method="POST" action="confirmationPage.php">
>>>>>>> parent of c409c42... Align
  <div class="form-group">
    <label for="firstName">First Name:</label>
    <input type="firstName" class="form-control" name="firstName">
  </div>
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
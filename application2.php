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
 
 if(mysqli_query($conn,"INSERT INTO user(firstName, lastName, userName, pass) VALUES('$firstname','$lastname','$email','$pass')"))
 {
			 header("location:confirmationPage.php");

 }
 else
 {
  ?>
        <script>alert('Error while registering you...');</script>
        <?php
 }
}
?>

<html>
<head>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		
<h3 id="centerHeader" >Application</h3>
<div style="width: 600px; margin: 40px auto 0 auto;">
<form role="form" method="POST" action="">
  <!-- <div class="form-group">
    <label for="firstName">First Name:</label>
    <input type="firstName" class="form-control" name="firstName">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div> -->
  <div class="form-group">
    <label for="address">Current Address:</label>
    <input type="address" class="form-control" name="address">
   </div>
     <div class="form-group">
    <label for="city">City:</label>
    <input type="city" class="form-control" name="city">
   </div>
     <div class="form-group">
    <label for="state">State/Province/Region:</label>
    <input type="state" class="form-control" name="state">
   </div>
     <div class="form-group">
    <label for="zip">Zip/Postal Code:</label>
    <input type="zip" class="form-control" name="zip">
   </div>
 <div class="form-group">
   <label for="phone">Phone Number: </label>
    <input type="phone" class="form-control" name="phone">
  </div>
  
       <div class="form-group">
    <label for="bday">Birthday:</label>
    <input type="date" class="form-control" name="bday">
  </div>
 
  <div class="form-inline">
   <label for="ssn">Social Security Number: </label><br>
    <div class="form-group">
    <input type="ssn" class="form-control" id="ssn1" size="2" maxlength="3"> -
	<input type="text" class="form-control" id="ssn2" size="2" maxlength="2"> -
	<input type="text" class="form-control" id="ssn3" size="2" maxlength="4">
	
</div>
</div>

       <div class="form-group">
    <label for="bday">Move in day: </label>
    <input type="date" class="form-control" name="bday">
  </div>
  
  <div class="form-group">
 <label for="bday">Apartment Location: </label>  
 </div>
 <div class="form-group">
 <label for="bedrooms">Number of bedrooms: </label>  
  <select class="form-control" id="bedrooms">
  <option value="volvo">1</option>
  <option value="saab">2</option>
  <option value="opel">3</option>
  <option value="vauxhall">4</option>
  </select> 
  </div>
<div class="form-group">
 <label for="bathrooms">Number of Bathrooms: </label>  
  <select class="form-control" id="bedrooms">
  <option value="volvo">1</option>
  <option value="saab">2</option>
  <option value="opel">3</option>
  <option value="vauxhall">4</option>
  </select>
</div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
  
</body>
</html>
  

</form>
</div>
<?php include_once("footer.php");?>
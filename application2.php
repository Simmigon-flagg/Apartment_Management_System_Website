<?php  include_once("header.php");?>
<?php
	//var_dump($_REQUEST); 			//remove
	
include_once('data/dbConnect.php');
session_start();

//session_destroy();							//testing

$user_check = $_SESSION['login_user'];
   
$ses_sql = mysqli_query($conn,"select * from user where username = '$user_check' ");
   
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
$login_session = $row['iduser'];

//session_destroy();		//testing

/*if(!isset($_SESSION['login_user'])){
	header("Location: login.php");
}*/

//echo $login_session;				//testing - remove

if(isset($_POST['submit'])){
	if(empty($_POST['address']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['zip']) || empty($_POST['phone']) /*|| empty($_POST['bday']) */|| empty($_POST['ssn1']) || empty($_POST['ssn2']) || empty($_POST['ssn3'])){
	$invalid = "All fields are required";
	}else{
	
		 $address = mysqli_real_escape_string($conn,$_POST['address']);		//STILL NEED TO IMPLEMENT FORM VALIDATION
		 $city = mysqli_real_escape_string($conn,$_POST['city']);
		 $state = mysqli_real_escape_string($conn,$_POST['state']);
		 $zip = mysqli_real_escape_string($conn,$_POST['zip']);
		 $phone = mysqli_real_escape_string($conn,$_POST['phone']);
		 //$bday = mysqli_real_escape_string($conn,$_POST['bday']);
		 $ssn = mysqli_real_escape_string($conn,$_POST['ssn1'] . $_POST['ssn2'] . $_POST['ssn3']);
		 
		 if(mysqli_query($conn,"INSERT INTO applicant(iduser, socialSecurity, streetAddress, City, Zip, phoneNumber) VALUES('$login_session','$ssn','$address','$city','$zip','$phone')")){
					 header("location:confirmationPage.php");

		 }else{
			 echo mysqli_error($conn);		//prints out query error
		  ?>
				<script>alert('Error while registering you...');</script>
				<?php
		 }
	}
}
//session_destroy();		//testing
?>

<html>
<head>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		
<h3 id="centerHeader" >Application</h3>
<h5 id="centerHeader">page 2 of 2</h5>

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
    <input type="ssn" class="form-control" name="ssn1" size="2" maxlength="3"> -
	<input type="text" class="form-control" name="ssn2" size="2" maxlength="2"> -
	<input type="text" class="form-control" name="ssn3" size="2" maxlength="4">
	
</div>
</div>
<div class="form-group">
   <label for="tittle">Employer </label>
    <input type="tittle" class="form-control" name="tittle">
  </div>
<div class="form-group">
   <label for="job">Job tittle </label>
    <input type="job" class="form-control" name="job">
  </div>
  
  <div class="form-group">
   <label for="income">Monthly gross income </label>
    <input type="income" class="form-control" name="income">
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
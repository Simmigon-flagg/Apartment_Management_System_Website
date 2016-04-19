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
$login_firstName = $row['firstName'];
$login_email = $row['userName'];

//session_destroy();		//testing

/*if(!isset($_SESSION['login_user'])){
	header("Location: login.php");
}*/

//echo $login_session;				//testing - remove
$invalid = "";

if(isset($_POST['submit'])){
	if(empty($_POST['address']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['zip']) || empty($_POST['phone']) /*|| empty($_POST['bday']) */|| empty($_POST['ssn1']) || empty($_POST['ssn2']) || empty($_POST['ssn3']) || empty($_POST['employer']) || empty($_POST['job']) || empty($_POST['income'])){
	$invalid = "All fields are required";
	}else{
	
		 $address = mysqli_real_escape_string($conn,$_POST['address']);
		 $city = mysqli_real_escape_string($conn,$_POST['city']);
		 $state = mysqli_real_escape_string($conn,$_POST['state']);
		 $zip = mysqli_real_escape_string($conn,$_POST['zip']);
		 $phone = mysqli_real_escape_string($conn,$_POST['phone']);
		 $ssn = mysqli_real_escape_string($conn,$_POST['ssn1'] . $_POST['ssn2'] . $_POST['ssn3']);
		 $employer = mysqli_real_escape_string($conn,$_POST['employer']);
		 $job = mysqli_real_escape_string($conn,$_POST['job']);
		 $income = mysqli_real_escape_string($conn,$_POST['income']);
		 
		 if(mysqli_query($conn,"INSERT INTO applicant(iduser, socialSecurity, streetAddress, City, state, Zip, phoneNumber, employedBy, JobTitle, monthlyGrossPay) VALUES('$login_session','$ssn','$address','$city','$state','$zip','$phone','$employer','$job','$income')")){
			 
			 include_once("PHPMailer-master/PHPMailerAutoload.php");

			$mail = new PHPMailer();

			$mail->IsSMTP();  // telling the class to use SMTP
			$mail->Host     = "smtp.gmail.com"; // SMTP server
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;

			$mail->From     = "luxepropertiesatlanta@gmail.com";
			$mail->Username   = "luxepropertiesatlanta@gmail.com";  // GMAIL username
			$mail->Password   = "simmigon"; 
			$mail->AddAddress($login_email);
			$mail->FromName = "Luxe Properties Atlanta";

			$mail->Subject  = "Luxe Properties Application Submitted";
			$mail->Body     = "Welcome, ". $login_firstName ."! \n\nWe've received your application for Luxe Properties Atlanta and we will be reviewing it soon. You will hear back from us within 3-4 business days regarding your application status. \n\n\nLuxe Properties Atlanta";
			//$mail->WordWrap = 50;

			if(!$mail->Send()) {
			  echo 'Message was not sent.';
			  echo 'Mailer error: ' . $mail->ErrorInfo;
			} else {
			  echo 'Message has been sent.';
			}
			 
			 header("location:confirmationPage.php");

		 }else{
			 echo mysqli_error($conn);		//prints out query error
		  ?>
				<script>alert('Error while registering you...');</script>
				<?php
		 }
	}
	mysqli_close($conn);
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

<center><b><font color = "red"><?php echo $invalid; ?></font></b></center>

<div style="width: 600px; margin: 40px auto 0 auto;">
<form role="form" method="POST" action="">
  <div class="form-group">
    <label for="address">Current Address:</label>
    <input type="address" class="form-control" name="address" value="<?php if(isset($_POST['submit'])) echo $_POST['address']; ?>">
   </div>
     <div class="form-group">
    <label for="city">City:</label>
    <input type="city" class="form-control" name="city" value="<?php if(isset($_POST['submit'])) echo $_POST['city']; ?>">
   </div>
     <div class="form-group">
    <label for="state">State/Province/Region:</label>
    <input type="state" class="form-control" name="state" value="<?php if(isset($_POST['submit'])) echo $_POST['state']; ?>">
   </div>
     <div class="form-group">
    <label for="zip">Zip/Postal Code:</label>
    <input type="zip" class="form-control" name="zip" value="<?php if(isset($_POST['submit'])) echo $_POST['zip']; ?>">
   </div>
 <div class="form-group">
   <label for="phone">Phone Number: </label>
    <input type="phone" class="form-control" name="phone" value="<?php if(isset($_POST['submit'])) echo $_POST['phone']; ?>">
  </div>
  <div class="form-inline">
   <label for="ssn">Social Security Number: </label><br>
    <div class="form-group">
    <input type="ssn" class="form-control" name="ssn1" size="2" maxlength="3" value="<?php if(isset($_POST['submit'])) echo $_POST['ssn1']; ?>"> -
	<input type="text" class="form-control" name="ssn2" size="2" maxlength="2" value="<?php if(isset($_POST['submit'])) echo $_POST['ssn2']; ?>"> -
	<input type="text" class="form-control" name="ssn3" size="2" maxlength="4" value="<?php if(isset($_POST['submit'])) echo $_POST['ssn3']; ?>">
	
</div>
</div>
<div class="form-group">
   <label for="employer">Employer: </label>
    <input type="employer" class="form-control" name="employer" value="<?php if(isset($_POST['submit'])) echo $_POST['employer']; ?>">
  </div>
<div class="form-group">
   <label for="job">Job Title: </label>
    <input type="job" class="form-control" name="job" value="<?php if(isset($_POST['submit'])) echo $_POST['job']; ?>">
  </div>
  
  <div class="form-group">
   <label for="income">Monthly Gross Income </label>
    <input type="income" class="form-control" name="income" value="<?php if(isset($_POST['submit'])) echo $_POST['income']; ?>">
  </div>
       <div class="form-group">
    <label for="movein">Move in day: </label>
    <input type="date" class="form-control" name="movein" value="<?php if(isset($_POST['submit'])) echo $_POST['movein']; ?>">
  </div>
  <div class="form-group">
 <label for="location">Apartment Location: </label>  
  <select class="form-control" name="location">
  <option disabled selected>Choose one...</option>
  <option value="downtown" <?php if(isset($_POST['submit'])) if($_POST['location'] == 'downtown') echo 'selected="selected"'; ?>>Luxe Downtown</option>
  <option value="midtown" <?php if(isset($_POST['submit'])) if($_POST['location'] == 'midtown') echo 'selected="selected"'; ?>>Luxe Midtown</option>
  <option value="buckhead" <?php if(isset($_POST['submit'])) if($_POST['location'] == 'buckhead') echo 'selected="selected"'; ?>>Luxe Buckhead</option>
  </select> 
  </div>
 <div class="form-group">
 <label for="bedrooms">Number of bedrooms: </label>  
  <select class="form-control" name="bedrooms">
  <option disabled selected>Choose one...</option>
  <option value="volvo" <?php if(isset($_POST['submit'])) if($_POST['bedrooms'] == 'volvo') echo 'selected="selected"'; ?>>1</option>
  <option value="saab" <?php if(isset($_POST['submit'])) if($_POST['bedrooms'] == 'saab') echo 'selected="selected"'; ?>>2</option>
  <option value="opel" <?php if(isset($_POST['submit'])) if($_POST['bedrooms'] == 'opel') echo 'selected="selected"'; ?>>3</option>
  <option value="vauxhall" <?php if(isset($_POST['submit'])) if($_POST['bedrooms'] == 'vauxhall') echo 'selected="selected"'; ?>>4</option>
  </select> 
  </div>
<div class="form-group">
 <label for="bathrooms">Number of Bathrooms: </label>  
  <select class="form-control" name="bathrooms">
  <option disabled selected>Choose one...</option>
  <option value="volvo" <?php if(isset($_POST['submit'])) if($_POST['bathrooms'] == 'volvo') echo 'selected="selected"'; ?>>1</option>
  <option value="saab" <?php if(isset($_POST['submit'])) if($_POST['bathrooms'] == 'saab') echo 'selected="selected"'; ?>>2</option>
  <option value="opel" <?php if(isset($_POST['submit'])) if($_POST['bathrooms'] == 'opel') echo 'selected="selected"'; ?>>3</option>
  <option value="vauxhall" <?php if(isset($_POST['submit'])) if($_POST['bathrooms'] == 'vauxhall') echo 'selected="selected"'; ?>>4</option>
  </select>
</div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
  
</body>
</html>
  

</form>
</div>
<?php include_once("footer.php");?>
<?php include_once("header.php");?>

<?php
/* ***************THIS IS FOR LOGIN NOT APPLICATION*************
   include("data/dbConnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   */
?>


<h3>Application</h3>

<object width="200" height="200" style="border:5px solid black"></object>

<form role="form" method="POST" action="confirmationPage.php">
  <div class="form-group">
    <label for="firstName">First Name:</label>
    <input type="firstName" class="form-control" id="firstName">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name:</label>
    <input type="lastName" class="form-control" id="lastName">
  </div>
  <div class="form-group">
    <label for="address">Current Address:</label>
    <input type="address" class="form-control" id="address">
   </div>
     <div class="form-group">
    <label for="city">City:</label>
    <input type="city" class="form-control" id="city">
   </div>
     <div class="form-group">
    <label for="state">State:</label>
    <input type="state" class="form-control" id="state">
   </div>
     <div class="form-group">
    <label for="zip">Zip:</label>
    <input type="zip" class="form-control" id="zip">
   </div>
 <div class="form-group">
    <label for="phone">Phone Number:</label>
    <input type="phone" class="form-control" id="phone">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
    <div class="form-group">
    <label for="pwdConfirm">Re-Enter Password:</label>
    <input type="password" class="form-control" id="pwdConfirm">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php include_once("footer.php");?>
<?php include_once("header.php");?>


<?php



   include("data/dbConnect.php");
   session_start();
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
	   
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']); 
	 
      $sql = "SELECT iduser FROM user WHERE userName = '$myusername' AND pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");        this function has been REMOVED as of PHP 5.4.0
         $_SESSION['login_user'] = $myusername;
         
         header("location:userLogin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo $error;
      }
   }
 
?>
<html>
<head>
<title>My First Website</title>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />	
		
	<h3 id="centerHeader" >Resident Login</h3>
<div style="width: 200px; margin: 100px auto 0 auto;">
	<div id="main">

<form action="" method="POST" role="form">
  <div class="form-group">
    <label for="username">Email address:</label>
    <input type="email" class="form-control" name="username">
  </div>
  </div>
  <div class="form-group">
<p class="hidden"></p>

    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div> <!--
  <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div> -->
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </div>
  </div>
  </div>
</form>
</div>

<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $nameErr = "Email is required";
  } else {
    $name = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $emailErr = "Password is required";
  } else {
    $email = test_input($_POST["password"]);
  }
}
*/
?>

<?php include_once("footer.php");?>


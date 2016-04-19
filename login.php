<?php include_once("header.php");?>

<?php

   include_once("data/dbConnect.php");
   session_start();
   $invalid = "";
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
	   
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);	//uncomment later
      $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']); 		//uncomment later
	  
	  //$myusername = 'admin@admin.com'; $mypassword = 'admin';		//temporary. remove later
	 
      $sql = "SELECT iduser FROM user WHERE userName = '$myusername' AND pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $user_id = $row['iduser'];
      //$active = $row['active'];
	  
	  $accepted = mysqli_fetch_array(mysqli_query($conn,"SELECT accepted FROM applicant WHERE iduser = '$user_id'"),MYSQLI_ASSOC)['accepted'];
	  
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");        this function has been REMOVED as of PHP 5.4.0
         $_SESSION['login_user'] = $myusername;
		 
         //$hour = time() + 3600;
		 //setcookie('ID_my_site', $_POST['username'], $hour);                      //remember me
		 
         header("location:userLogin.php");
		 
		 if($accepted != "1" ){			//if user hasn't been accepted, they cannot access website
		  session_destroy();
		  header("location:confirmationPage.php");
		 }
		 
      }else {
         $invalid = "Your Username or Password is invalid";
      }
	  
	  
   }
 mysqli_close($conn);
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<meta name="author" content="your name" />
<head>
<title>My First Website</title>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />

		<style>

</style>
<body background= "">
<body background= no-repeat> 

<div style="width: 700px; margin: 50px auto 0 auto;">
<div class="w3-card-4 w3-margin">
<div class="w3-container w3-black">
  <h2>Resident login</h2>
<b><center><font color="red"><?php echo $invalid ?></font></center></b>
</div>
</br>
<form class="w3-container" method="POST" role="form" action="">
<body background= no-repeat> 	
		

<p>
<input class="w3-input" type="email" name="username" >
<label for="username">Username</label>

<p>      
<input class="w3-input" type="password" name="pwd">
<label label for="pwd">Password</label></p>

  </div>
  <div id = "centerHeader">
    <div class="checkbox">
      <label><input type="checkbox" name="remember" value="1" checked> Remember me</label>
     <br>
	 <a  href="forgotPassword.php">Forgot password?</a>
	</div>
  <button type="submit" name="submit" class="btn btn-default">&nbsp;Submit</button>
</div>
</form>

  </div>
  </div>
</form>
</div>
</div>
</body>
</html>

<?php //include_once("footer.php");?>


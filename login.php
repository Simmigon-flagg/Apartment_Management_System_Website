<?php include_once("header.php");?>

<?php

   include_once("data/dbConnect.php");
   session_start();
   $invalid = "";
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
	   
      //$myusername = mysqli_real_escape_string($conn,$_POST['username']);	//uncomment later
      //$mypassword = mysqli_real_escape_string($conn,$_POST['pwd']); 		//uncomment later
	  
	  $myusername = 'admin@admin.com'; $mypassword = 'admin';		//temporary. remove later
	 
      $sql = "SELECT iduser FROM user WHERE userName = '$myusername' AND pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");        this function has been REMOVED as of PHP 5.4.0
         $_SESSION['login_user'] = $myusername;
		 
         //$hour = time() + 3600;
		 //setcookie('ID_my_site', $_POST['username'], $hour);                      //remember me
		 
         header("location:userLogin.php");
      }else {
         $invalid = "Your Login Name or Password is invalid";
      }
   }
 
?>
<html>
<head>
<title>My First Website</title>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		
<body background= "">
<body background= no-repeat> 	
		
	<h3 id="centerHeader" >Resident Login</h3>
	<b><center><font color="red"><?php echo $invalid ?></font></center></b>
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
  </div>
  <div class="checkbox">
      <label><input type="checkbox" name="remember" value="1"> Remember me</label>
    </div>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </div>
  </div>
  </div>
</form>
</div>

<?php //include_once("footer.php");?>


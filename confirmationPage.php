<?php include("header.php");?>

<?php
/*
var_dump($_POST);

   include("data/dbConnect.php");
   session_start();
   
   //if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $userName = mysqli_real_escape_string($conn,$_POST['username']);
      $pass = mysqli_real_escape_string($conn,$_POST['pwd']); 
      
      $sql = "SELECT id FROM user WHERE userName = '$userName' and pass = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("userName");
         $_SESSION['login_user'] = $userName;
         
         header("location: confirmationPage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
  // }
  */
?>

	Check back in 3 to 4 business days. Thanks
<?php include("footer.php");?>


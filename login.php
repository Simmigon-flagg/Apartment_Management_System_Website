<?php include_once("header.php");?>
<h1>Login</h1>
<form method="POST" action="userLogin.php" role="form" ">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php include_once("footer.php");?>


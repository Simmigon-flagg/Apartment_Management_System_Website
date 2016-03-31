<?php include_once("header.php");?>
<h1>Resident Login</h1>
<form method="POST" action="userLogin.php" role="form" ">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php include_once("footer.php");?>


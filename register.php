
<?php include_once("header.php");?>
<h3>Sign up</h3>
<form role="form" method="POST" action="confirmationPage.php">
  <div class="form-group">
    <label for="name">Full Name:</label>
    <input type="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="address" class="form-control" id="address">
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

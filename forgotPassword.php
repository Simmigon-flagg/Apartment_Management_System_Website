<?php include_once("header.php");?>

<head>
<title>My First Website</title>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
<div style="width: 600px; margin: 50px auto 0 auto;">

<h1>Request New Password</h1>
<br>

<form action="change.php" method="POST" role="form">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div>
  <button type="submit" class="btn btn-default" name="ForgotPassword">Submit</button>
	</div>
  </div>
</p>

</form>
<?php include("footer.php"); ?>
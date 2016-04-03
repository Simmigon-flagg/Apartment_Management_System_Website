<?php include("header.php");
include('session.php');
echo $login_session;          //for testing. prints user's first name
?>
  <h2><a href = "logout.php">Sign Out</a></h2>             <!--ugly sign out button for testing-->
<h1>Welcome Home </h1>
	
	<div class="row">
  <div class="col-sm-4">
    <p class="text-left"><strong>Rent</strong></p><br>
    <a href="#demo" data-toggle="collapse">
      <img src="images/blue_button.jpg" class="img-circle person" alt="Pay Rent">
    </a>
    <div id="demo" class="collapse">
      <p><a href="paySystem.php">Pay System</a></p>
      <p><a href="vpBillHistory.php">View/Print Bill History</a></p>
    </div>
  </div>
  <div class="col-sm-4">
    <p class="text-left"><strong>Utility</strong></p><br>
    <a href="#demo2" data-toggle="collapse">
      <img src="images/blue_button.jpg" class="img-circle person" alt="Pay Utilities">
    </a>
    <div id="demo2" class="collapse">
      <p><a href="payThirdParty.php">Pay Third party</a></p>
      <p><a href="addNewUtility.php">Add New Utility</a></p>
    </div>
  </div>
  <div class="col-sm-4">
    <p class="text-left"><strong>Maintenance</strong></p><br>
    <a href="#demo3" data-toggle="collapse">
      <img src="images/blue_button.jpg" class="img-circle person" alt="Maintenance Request ">
    </a>
    <div id="demo3" class="collapse">
      <p><a href="addNewRequest.php">Add New Request</a></p>
      <p><a href="viewMaintenanceHistory.php">View Maintenance History</a></p>
    </div>
  </div>
</div>
<?php include("footer.php");?>
<?php

/*$favcolor = "red";

switch ($favcolor) {
    case "red":
        $myfile = fopen("simmigon.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("simmigon.txt"));
		fclose($myfile);
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}*/
?>



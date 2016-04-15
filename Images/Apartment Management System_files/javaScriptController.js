	$("button").click(function() {
     var x = document.getElementById(this.id).value;
    alert(x);
	if(x = "log"){
		
	document.getElementById("bodyContent").innerHTML =  "Simmigon";
		
	}
});
function(){
	document.getElementById("bodyContent").innerHTML =  
	"You are now Login"
	
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
      <p><a href="addNewUtility.php">Add new Utility</a></p>
    </div>
  </div>
  <div class="col-sm-4">
    <p class="text-left"><strong>Maintenance</strong></p><br>
    <a href="#demo3" data-toggle="collapse">
      <img src="images/blue_button.jpg" class="img-circle person" alt="Maintenance Request ">
    </a>
    <div id="demo3" class="collapse">
      <p><a href="addNewRequest.php">Add new Request</a></p>
      <p><a href="viewPassRequest.php">View Pass request</a></p>
    </div>
  </div>
</div>
}
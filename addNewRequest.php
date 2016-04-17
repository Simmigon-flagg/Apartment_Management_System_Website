<?php include_once("userHeader.php");
//var_dump($_REQUEST); 			//remove
session_start();
include_once("data/dbConnect.php");
$type = $location = $description = $invalid = "";

if(isset($_POST['submit'])) {
	if(empty($_POST['type']) || empty($_POST['location']) || empty($_POST['description']) ){
		$invalid = "All fields are required";
	}else{
		$type = mysqli_real_escape_string($conn,$_POST['type']);
		$location = mysqli_real_escape_string($conn,$_POST['location']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		$access = mysqli_real_escape_string($conn,$_POST['access']);
		
		if(mysqli_query($conn,"INSERT INTO maintenance(iduser, type, description, location) VALUES('$login_session','$type','$description','$location')")){
						
						header("location:application2.php");

				 }else{
					 echo mysqli_error($conn);
				  ?>
						<script>alert('Error while registering you...');</script>
						<?php
				 }
	}
}
?>
<script language="JavaScript">
function CountLeft(field, count, max) {
	if (field.value.length > max)
	field.value = field.value.substring(0, max);
	else
	count.value = max - field.value.length;
}
</script>
<br><center><h1>Maintenance Request</h1></center>
<div style="width: 500px; margin: 40px auto 0 auto;">
<form role="form" method="POST" action="">
   <div class="form-group">
 <label for="type">Type: </label>  
  <select class="form-control" name="type">
  <option disabled selected>Choose one...</option>
  <option value="general">General</option>
  <option value="water">Water</option>
  <option value="aircon">A/C</option>
  </select> 
  </div> 
     <div class="form-group">
 <label for="location">Location: </label>  
  <select class="form-control" name="location">
  <option disabled selected>Choose one...</option>
  <option value="bathroom">Bathroom</option>
  <option value="kitchen">Kitchen</option>
  <option value="livingroom">Living Room</option>
  <option value="bedroom">Bedroom</option>
  <option value="other">Other</option>
  </select> 
  </div> 
  <div class="form-group">
  <label for="description">Description (limit 250 characters):</label>
   <textarea rows="4" cols="50" class="form-control" name="description" maxlength="250" onkeydown="CountLeft(this.form.description, this.form.left,250);" onkeyup="CountLeft(this.form.description,this.form.left,250);"></textarea>
	<div align="right">Characters left: <input readonly type="text" name="left" size="1" maxlength="3" value="250"></div>
	</div>
	<div>
	<label for "vendoraccess">Vendor Access to the Premises (Pick one option):</label><br>
  <input type="radio" name="access" value="present" checked> I want to be present for the appointment.<br>
  <input type="radio" name="access" value="notpresent"> Vendor has my permission to enter home to complete authorized repairs.<br>
	</div>
	<div><br>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
	</div>
</form>
</div>
<?php include_once("footer.php");?>
	

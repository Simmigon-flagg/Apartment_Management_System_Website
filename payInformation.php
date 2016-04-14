<!DOCTYPE html>
<?php include("userHeader.php"); ?>
<html>
<head>
	<meta name="author" content="your name" />
	<meta name="description" content="" />
		<link rel="stylesheet" href="styles/style.css" type="text/css" />

<div style="width: 600px; margin: 40px auto 0 auto;">

  <div class="form-group">
  <h3 id="centerHeader" >Please enter your card information</h3> <br>
    <label for="firstName">Cardholder's First Name:</label>
    <input type="firstName" class="form-control" name="firstName"><br>
  <div class="form-group">
    <label for="lastName">Cardholder's Last Name:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div>
<div class="form-group">
 <label for="bathrooms">Type of card:</label>  
  <select class="form-control" id="bedrooms">
  <option value="volvo">Visa</option>
  <option value="saab">American Express</option>
  <option value="opel">Discover</option>
  <option value="vauxhall">MasterCard</option>
  </select>
</div>

<td colspan="2" align="center"><small>
<h3 id="centerHeader" >Enter your billing address:</h3>

  <div class="form-group">
    <label for="lastName">Street Address:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div>
    <div class="form-group">
    <label for="lastName">City:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div>
  
      <div class="form-group">
    <label for="lastName">State/Province:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div>
  
        <div class="form-group">
    <label for="lastName">Zip/Postal Code:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div>
  
          <div class="form-group">
    <label for="lastName">Country:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div>


<td colspan="2" align="center">
<a class="btn" href="afterPayment.php"> 
<button class="btn">Submit payment </button> </a>
</td>
</div>
</div>

<?php include("footer.php"); ?>
<!DOCTYPE html>
<?php include("userHeader.php"); ?>
<div style="width: 600px; margin: 50px auto 0 auto;">
<table>
<tr>
<td>Cardholder's First Name:</td>
<td><input type="text" name="First_Name"></td>
</tr><tr>
<td>Cardholder's Last Name:</td>
<td><input type="text" name="Last_Name"></td>
</tr><tr>
<td>Credit Card Number:</td>
<td><input type="text" name="Card_Num"></td>
</tr><tr>
</tr><tr>
<td>Exp. date (mmyy):</td>
<td><input type="text" name="Exp_Date" maxlength="4"></td>
</tr><tr>

</tr><tr>
<td>Card Number:</td>
<td><input type="text" name="Card_Code"></td>
</tr><tr>
<br>
<br>
<td colspan="2" align="center"><small>
Enter the billing address:
</small></td>
</tr><tr>
<td>Street Address:</td>
<td><input type="text" name="Address"></td>
</tr><tr>
<td>City:</td>
<td><input type="text" name="City"></td>
</tr><tr>
<td>State/Province:</td>
<td><input type="text" name="State"></td>
</tr><tr>
<td>Zip/Postal Code:</td>
<td><input type="text" name="Zip"></td>
</tr><tr>
<td>Country:</td>
<td><input type="text" name="Country"></td>
</tr><tr>
<td colspan="2" align="center">
<input type="submit" value="Submit payment">
</td>
</div>
</tr>
</table>

<?php include("footer.php"); ?>
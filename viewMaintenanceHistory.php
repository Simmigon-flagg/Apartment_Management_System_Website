<?php include("userHeader.php");
//include_once('data/dbConnect.php');
$count =1;
$result_maintenance = mysqli_query($conn,"SELECT * FROM maintenance WHERE iduser = $login_session");
   
$maintenance_rows = mysqli_fetch_array($result_maintenance,MYSQLI_ASSOC);
//$maintenance_row = $result_maintenance->fetch_assoc();




?>

<center><h1>View Maintenance History</h1></center>

<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Number</th>
        <th>Type</th>
        <th>Location</th>
		<th>Date</th>
		<th>Description</th>
      </tr>
    </thead>
    <tbody>
	<?php /*
	foreach ((array) $maintenance_rows as $value) {
		echo $value;
		//echo $value;
		
		echo 
		'<tr>
			<td>John</td>
			<td>Doe</td>
			<td>john@example.com</td>
		</tr>';
	} */
	
	while($maintenance_row = $result_maintenance->fetch_assoc()){
		echo 
		'<tr>
			<td>'.$count.'</td>
			<td>'.$maintenance_row['type'].'</td>
			<td>'.$maintenance_row['location'].'</td>
			<td>'.$maintenance_row['date'].'</td>
			<td>'.$maintenance_row['description'].'</td>
		</tr>';
		$count++;
	}
	?>

    </tbody>
  </table>
</div>

</body>

<?php include("footer.php");?>
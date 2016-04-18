<?php include("userHeader.php");
//include_once('data/dbConnect.php');
$count =1;
$result_maintenance = mysqli_query($conn,"SELECT * FROM maintenance WHERE iduser = $login_session");
   
//$maintenance_rows = mysqli_fetch_array($result_maintenance,MYSQLI_ASSOC);
//$maintenance_row = $result_maintenance->fetch_assoc();

?>

<br>
<br>
<body>

<div class="container">
  <h1>View Maintenance History</h1>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Number</th>
        <th>Type</th>
        <th>Location</th>
		<th>Date/time</th>
		<th>Completed</th>
		<th>Description</th>
      </tr>
    </thead>
    <tbody>
<?php 
	
	while($maintenance_row = $result_maintenance->fetch_assoc()){
		$date = explode(" ", $maintenance_row['date']);
		$time = (explode(":",$date[1])[0] - 4) . ":" . explode(":",$date[1])[1] . ":" . explode(":",$date[1])[2];
		$completed = "No";
		if($maintenance_row['completed'] == 1){
			$completed = "Yes";
		}
		echo 
		'<tr>
			<td>'.$count.'</td>
			<td>'.$maintenance_row['type'].'</td>
			<td>'.$maintenance_row['location'].'</td>
			<td class="col-md-1">'.$date[0]. '<br>' . $time.'</td>
			<td>'.$completed.'</td>
			<td>'.$maintenance_row['description'].'</td>
		</tr>';
		$count++;
	}
mysqli_close($conn);
?>

    </tbody>
  </table>
</div>

</body>

<?php include("footer.php");?>
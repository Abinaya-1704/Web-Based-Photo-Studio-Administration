<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php
session_start();
include('HeaderEmployee.php');
?>
	
	<h4>ALLOTED WORKS<h4>

	<form action="" method="POST">
	<table class="table table-bordered table-striped table-hover" align="center">
		
		<tr><th>Booking ID</th><th>Customer Name</th><th>Event Name</th><th>Event Location</th><th>On Date</th></tr>
		<?php
		$query = mysql_query("Select * From BookingTable Where Status != 'PENDING' and EmpID = '". $_SESSION["username"] ."'  ",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['BookingID'] . "</td><td>" . $r['CustomerName'] . "</td><td>" . $r['EventName'] . "</td><td>" . $r['EventLocation'] . "</td><td>" . $r['OnDate'] . "</td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
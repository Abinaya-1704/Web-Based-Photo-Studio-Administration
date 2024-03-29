<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>


<?php
include('HeaderAdmin.php');
?>
	
	<h4>COMPLETED WORK REPORT<h4>

	<form action="" method="POST">
	<table class="table table-striped table-bordered table-hover" align="center">
		
		<tr><th>Booking ID</th><th>Customer Name</th><th>Event Name</th><th>Event location</th><th>On Date</th><th>TotalCharge</th></tr>
		<?php
		$query = mysql_query("Select * From BookingTable Where Status = 'FINISHED'",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['BookingID'] . "</td><td>" . $r['CustomerName'] . "</td><td>" . $r['EventName'] . "</td><td>" . $r['EventLocation'] . "</td><td>" . $r['OnDate'] . "</td><td>" . $r['TotalCharge'] . "</td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
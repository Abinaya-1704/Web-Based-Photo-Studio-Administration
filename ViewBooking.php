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
	
	<h4>APPROVAL PENDING REQUESTS<h4>

	<form action="ViewBookingCode.php" method="POST">
	<table class="table table-bordered table-striped table-hover" align="center">

		
		<tr><th>Booking ID</th><th>Customer Name</th><th>Event Name</th><th>Event location</th><th>On Date</th><th>Template</th><th>Total Charges</th><th>Image</th><th>Delete</th></tr>
		<?php
		$query = mysql_query("Select * From bookingtable where Status = 'PENDING' ",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['BookingID'] . "</td><td>" . $r['CustomerName'] . "</td><td>" . $r['EventName'] . "</td><td>" . $r['EventLocation'] . "</td><td>" . $r['OnDate'] . "</td><td>" . $r['ContactNo']. "</td><td>" . $r['TotalCharge'] . "</td><td><img src='Image/Template/".$r['Image']."' style='height:100px;width:100px;'><td><input type='submit' name='" . $r['BookingID'] . "' value='Approve' class='btn_delete'/></td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
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
	
	<h4>CUSTOMER DETAILS</h4>

	<form action="" method="POST">
	<table class="table table-bordered table-hover" align="center">
		
		<tr><th>Customer Name</th><th>Contact No.</th><th>Email ID</th></tr>
		<?php
		$query = mysql_query("Select * From BookingTable",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['CustomerName'] . "</td><td>" . $r['ContactNo'] . "</td><td>" . $r['EmailID'] . "</td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
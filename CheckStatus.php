<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>


<?php
include('Header.php');
?>

	<br/>
	<br/>
	<br/>

	<h4>CHECK YOUR REQUEST STATUS HERE</h4>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<table style="text-align:center;" align="center" class="table table-bordered table-striped" style="width:500px;">
			<tr>
				<td>Enter BookingID:
					<br/>
					<input type="text" name="txtBookingID" Required/>
					<br/><br/>
					<input type="submit" name="btnSubmit" value="Check Status" class="btn_submit" Style="width:160px;" />
				</td>
			</tr>
		</table>

		<?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				$BookingID = $_REQUEST['txtBookingID'];

				$queryTmp = "Select Status From BookingTable Where BookingID = '". $BookingID ."' ";
				$Status = mysql_fetch_object(mysql_query($queryTmp))->Status;

				echo "<h3>" . $Status . "</h3>";

				$queryTmp = "Select TotalCharge From BookingTable Where BookingID = '". $BookingID ."' ";
				$TotalCharge = mysql_fetch_object(mysql_query($queryTmp))->TotalCharge;

				echo "Total Charge: <br/>" . $TotalCharge . "<br/>";

			}

		?>



	</form>


</div>
</body>
</html>
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

	<h4>ALLOT EMPLOYEE TO JOB REQUEST</h4>

	<form action="AllotEmployeeCode.php" method="post">
		<table style="text-align:left;width:500px;" class="table table-striped table-bordered table-hover" align="center">
			<tr>
				<td align="right">Select BookingID:</td> 
				<td>
					<select  name="ddBooking" Required>
				 		<option value="">Select</option>
					 	<?php
							$query = mysql_query("Select BookingID From BookingTable Where Status = 'APPROVED' and EmpID = '' ",$con);
							While($r = mysql_fetch_array($query))
							{
								echo "<option value='". $r['BookingID'] ."' >" . $r['BookingID'] ."</option>";
							}
						?>
					</select> 
				</td>
			</tr>
			<tr>
				<td align="right">Select Employee:</td> 
				<td>
					<select  name="ddEmployee" Required>
				 		<option value="">Select</option>
					 	<?php
							$query = mysql_query("Select EmpID, EmpName From EmployeeTable",$con);
							While($r = mysql_fetch_array($query))
							{
								echo "<option value='". $r['EmpID'] ."' >" . $r['EmpName'] ."</option>";
							}
						?>
					</select> 
				</td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
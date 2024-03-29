<html><head>
<script type="text/javascript">
function calc()
{
document.f1.txtCharge.value=parseInt(document.f1.txtphotoCharge.value)+parseInt(document.f1.txttempCharge.value);
}
</script>
<?php
include('HeaderEmployee.php');
session_start();
?>

	<h4>UPDATE BOOKING DETAILS</h4>

	<form action="UpdateBooking.php" method="post" name="f1">
		<table style="text-align:left;" align="center">
			<tr>
				<td align="right">Select BookingID:</td> 
				<td>
					<select name="ddBooking" Required>
						<option value="">Select</option>
						<?php
							$query = mysql_query ("Select *From BookingTable Where Status in('Approved','Processing') and EmpID = '". $_SESSION["username"] ."' ",$con);
							while($r = mysql_fetch_array($query))
							{
								echo "<option value= ".$r['BookingID']. ">".$r['BookingID']."</option>";
							}
						?>
					</select>
				</td>
			</tr>
<tr><td colspan="2" align="center"><input type="submit" value="View" class="btn_submit"></td></tr>
</table></form>
</body>
</html>

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
$id=$_POST['ddBooking'];
$_SESSION["id"]=$id;
$qry=mysql_query("select * from bookingtable where BookingID='".$id."'",$con);
$r=mysql_fetch_array($qry);
$charge=$r['PhotographyCharges'];
?>
</head><body>
	<h4>UPDATE BOOKING DETAILS</h4>

	<form action="UpdateBookingCode.php" method="post" name="f1">
		<table style="text-align:left;" align="center">
				</td>
			</tr>
<tr>		<td align="right">PhotoGraphy Charge:</td> 
				<td><input type="text" name="txtphotoCharge" value='<?php echo $charge;?>' oninput="calc();" Required/></td>
			<tr>
				<td align="right">Template Charge:</td> 
				<td><input type="text" name="txttempCharge" oninput="calc();" Required/></td>
			</tr>
			<tr>
				<td align="right">Total Charge:</td> 
				<td><input type="text" name="txtCharge" Required/></td>
			</tr>
			<tr> 
				<td align="right">Status:</td> 
				<td>
					<select name="ddStatus" Required>
						<option value="">Select</option>
					  	<option value="PROCESSING">PROCESSING</option>
					  	<option value="FINISHED">FINISHED</option>
					</select> 
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
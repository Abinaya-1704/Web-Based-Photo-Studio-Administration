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
$PrimaryID = "B" . rand(10000,99999);

?>

	<br/>
	<br/>
	<br/>
	
	<h4>PRE BOOKING</h4>

	<form action="AddBookingCode.php" method="post" enctype="multipart/form-data">
		<table style="text-align:left;width:500px;" align="center" class="table table-striped table-bordered table-hover">
			<tr>
				<td align="right">Booking ID:</td> <td><input type="text" name="txtId" value="<?php echo $PrimaryID; ?>" /></td>
			</tr>
			<tr>
				<td align="right">Tariff:</td> 
				<td>
					<select  name="ddTariff" Required>
				 		<option value="Nil">Select</option>
					 	<?php
							$query = mysql_query("Select TemplateId,TemplateName, Cost From TemplateTable",$con);
							While($r = mysql_fetch_array($query))
							{
								echo "<option value='". $r['TemplateId'] ."' >" . $r['TemplateName'] . " - " . $r['Cost'] ."</option>";
							}
						?>
					</select> 
				</td>
			</tr>
			<tr>
				<td align="right">Person Name:</td> <td><input type="text" name="txtCus" Required/></td>
			</tr>
			<tr>
				<td align="right">Event Name:</td> <td><input type="text" name="txtEvent" Required/></td>
			</tr>
			<tr>
				<td align="right">Event location:</td> 
				<td>
					<textarea name="txtAddress" Required></textarea>
				</td>
			</tr>
			<tr>
				<td align="right">On Date:</td> <td><input type="date" name="txtDate" Required/></td>
			</tr>
			<tr>
				<td align="right">Contact No:</td> <td><input type="text" name="txtContactNo" Required pattern="[0-9]{10}"/></td>
			</tr>
			<tr>
				<td align="right">Email ID:</td> <td><input type="email" name="txtEmailID" required/></td>
			</tr>
<tr>
				<td align="right">PreModel Image:</td> <td><input type="file" name="fileUploader" id="fileUploader" Required/></td>
			</tr>
			
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" Required/></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
<html>
<head>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />


<script type="text/javascript">
function show()
{
if(document.f1.txtName.value!="" && document.f1.txtJT.value!="" && document.f1.txtContactNo.value!="" && document.f1.txtQ.value!="" && document.f1.txtE.value!="" && document.f1.txtCS.value!="" && document.f1.txtES.value!="" && document.f1.txtEMailId.value!="" )
{

window.alert("Job request saved successfully");
}
}
</script>
</head>
<body>
<?php
include('Header.php');
$queryTmp= "Select Count(*) as data From JobTable";
$PrimaryID = "E" . sprintf("%03d",mysql_fetch_object(mysql_query($queryTmp))->data + 1);

?>
	<br/><br/><br/><br/>
	<h4>NEW JOB APPLICATION</h4>

	<form action="ApplyForJobCode.php" method="post" name="f1">
		<table style="text-align:left;width:500px;" class="table table-striped table-bordered table-hover" align="center">
			<tr>
				<td align="right">Reference ID:</td> <td><input type="text" name="txtId" value="<?php echo $PrimaryID; ?>" Required/></td>
			</tr>
			<tr>
				<td align="right">Applicant Name:</td> <td><input type="text" name="txtName" Required/></td>
			</tr>
				<tr>
				<td align="right">Job Title:</td> <td><input type="text" name="txtJT" Required/></td>
			</tr>
			<tr>
				<td align="right">Contact No:</td> <td><input type="text" name="txtContactNo" Required pattern="[0-9]{10}"/></td>
			</tr>
				<tr>
				<td align="right">Qualification:</td> <td><input type="text" name="txtQ" Required/></td>
			</tr>
				<tr>
				<td align="right">Experience:</td> <td><input type="text" name="txtE" Required/></td>
			</tr>
			<tr>
				<td align="right">Current Salary:</td> <td><input type="text" name="txtCS" Required/></td>
			</tr>
			<tr>
				<td align="right">Expected Salary:</td> <td><input type="text" name="txtES" Required/></td>
			</tr>
			<tr>
				<td align="right">Email ID:</td> <td><input type="email" name="txtEMailId" Required/></td>
			</tr>
			
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" onclick="show();" /></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
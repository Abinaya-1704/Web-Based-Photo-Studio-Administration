<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function phone()
{
if(document.f1.txtContactNo.value=="")
{
window.alert("enter mobile number");
}
else if(document.f1.txtContactNo.value.length<10 || document.f1.txtContactNo.value.length>10)
{
window.alert("enter valid mobile number");
}
}
</script>
</head>
<?php
include('HeaderAdmin.php');
$queryTmp= "Select Count(*) as data From EmployeeTable";
$PrimaryID = "E" . sprintf("%03d",mysql_fetch_object(mysql_query($queryTmp))->data + 1);

?>
	
	<h4>NEW EMPLOYEE CREATION</h4>

	<form action="AddEmployeeCode.php" method="post" name="f1">
		<table style="text-align:left;width:500px;" class="table table-striped table-bordered table-hover" align="center">
			<tr>
				<td align="right">Emp ID:</td> <td><input type="text" name="txtId" value="<?php echo $PrimaryID; ?>" Required/></td>
			</tr>
			<tr>
				<td align="right">Emp Name:</td> <td><input type="text" name="txtName" Required/></td>
			</tr>
			<tr>
				<td align="right">Contact No:</td> <td><input type="text" name="txtContactNo" Required pattern="[0-9]{10}"/></td>
			</tr>
			<tr>
				<td align="right">Email ID:</td> <td><input type="email" name="txtEMailId" Required/></td>
			</tr>
			<tr>
				<td align="right">Password:</td> <td><input type="password" name="txtPassword" /></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit"  value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
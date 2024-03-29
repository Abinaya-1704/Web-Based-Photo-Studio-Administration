<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
include('HeaderAdmin.php');
$queryTmp = "Select MAX(TemplateID) as data From TemplateTable";
$PrimaryID = mysql_fetch_object(mysql_query($queryTmp))->data + 1;
?>

	<h4>NEW TEMPLATE CREATION</h4>

	<form action="AddTemplateCode.php" method="post" enctype="multipart/form-data">
		<table style="text-align:left;width:500px;" class="table table-striped table-bordered table-hover" align="center">
			<tr>
				<td align="right">Template ID:</td> <td><input type="text" name="txtId" value="<?php echo $PrimaryID; ?>" Required/></td>
			</tr>
			<tr>
				<td align="right">Template Name:</td> <td><input type="text" name="txtName" Required/></td>
			</tr>
			<tr>
				<td align="right">Category:</td> 
				<td>
					<select name="ddCategory">
					  <option value="">Select</option>
					  <option value="Wedding Album">Wedding Album</option>
					  <option value="Portraits">Portraits</option>
					  <option value="Landscapes">Landscapes</option>
					  <option value="Baby Shooting">Baby Shooting</option>
					  <option value="Festivals">Festivals</option>
					  <option value="Functions">Functions</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td align="right">Cost:</td> <td><input type="text" name="txtCost" Required/></td>
			</tr>
			<tr>
				<td align="right">Image:</td> <td><input type="file" name="fileUploader" id="fileUploader" Required/></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
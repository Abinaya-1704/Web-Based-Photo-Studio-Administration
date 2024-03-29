
<?php
include('Header.php');
$queryTmp = "Select MAX(TemplateID) as data From TemplateTableByCustomer";
$PrimaryID = mysql_fetch_object(mysql_query($queryTmp))->data + 1;
?>
<br/><br/><br/><br/>
	<h4>NEW TEMPLATE CREATION</h4>

	<form action="AddTemplateByCustomerCode.php" method="post" enctype="multipart/form-data">
		<table style="text-align:left;" align="center">
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
				<td align="right">Image:</td> <td><input type="file" name="fileUploader" id="fileUploader" Required/></td>
			</tr>
			
			<tr>
				<td align="right">Person Name:</td> <td><input type="text" name="txtCus" /></td>
			</tr>
			<tr>
				<td align="right">Event location:</td> 
				<td>
					<textarea name="txtAddress" Required></textarea>
				</td>
			</tr>
			<tr>
				<td align="right">Contact No:</td> <td><input type="text" name="txtContactNo" /></td>
			</tr>
			<tr>
				<td align="right">Email ID:</td> <td><input type="email" name="txtEmailID" /></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
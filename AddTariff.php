
<?php
include('HeaderAdmin.php');
$queryTmp = "Select MAX(TariffID) as data From TariffTable";
$PrimaryID = mysql_fetch_object(mysql_query($queryTmp))->data + 1;
?>

	<h4>NEW TARIFF CREATION</h4>

	<form action="AddTariffCode.php" method="post" enctype="multipart/form-data">
		<table style="text-align:left;" align="center">
			<tr>
				<td align="right">Tariff ID:</td> <td><input type="text" name="txtId" value="<?php echo $PrimaryID; ?>" Required/></td>
			</tr>
			<tr>
				<td align="right">Tariff Name:</td> <td><input type="text" name="txtName" Required/></td>
			</tr>
			<tr>
				<td align="right">Cost:</td> <td><input type="text" name="txtCost" /></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
	</form>


</div>
</body>
</html>
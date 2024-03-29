
<?php
include('HeaderAdmin.php');
?>
	
	<h4>CUSTOMER TEMPLATE DETAILS</h4>

	<form action="ViewTemplateCode.php" method="POST">
	<table class="mygrid" align="center">
		
		<tr><th>TemplateID</th><th>TemplateName</th><th>Category</th><th>Template Image</th><th>PreModel Image</th><th>Name</th><th>Address</th><th>Contact No.</th><th>Email Id</th></tr>
		<?php
		$query = mysql_query("Select * From TemplateTableByCustomer",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['TemplateID'] . "</td><td>" . $r['TemplateName'] . "</td><td>" . $r['Category'] . "</td><td><img src = 'Image/Template/". $r['Image'] . "' Height='60px' Width='90px' /></td><td><img src = 'Image/Template2/". $r['PreModelImage'] . "' Height='60px' Width='90px' /></td><td>" . $r['PersonName'] . "</td><td>" . $r['Address'] . "</td><td>" . $r['ContactNo'] . "</td><td>" . $r['EMailId'] . "</td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
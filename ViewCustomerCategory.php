
<?php
include('HeaderAdmin.php');
?>
	
	<h4>SELECT TEMPLATE CATEGORY</h4>

	<form action="" method="POST">
	<table class="mygrid" align="center">
		
		<tr><th>TemplateID</th><th>Template Name</th><th>Category</th><th>Image</th><th>VIEW</th></tr>
		
		<?php
		$query3 = mysql_query("Select Category From TemplateTableByCustomer Group By Category",$con);
		While($r3 = mysql_fetch_array($query3))
		{
			$query4 = mysql_query("Select * From TemplateTableByCustomer Where Category='" . $r3['Category'] . "'",$con);
			
			if ($r4 = mysql_fetch_array($query4))
			{
			echo "<tr><td>" . $r4['TemplateID'] . "</td><td>" . $r4['TemplateName'] . "</td><td>" . $r4['Category'] . "</td><td><img src = 'Image/Template/customertemplate/". $r4['Image'] . "' Height='60px' Width='90px' /></td><td><a href='ViewCustomerTemplate.php?cat=" . $r4['Category'] . "'/>View Photos</a></td></tr>";
			}
		}
		mysql_close($con);
		?>
	</table>
	</form>


</div>
</body>
</html>
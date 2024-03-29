

<?php
include('HeaderAdmin.php');
?>
	
	<h4>AVAILABLE TEMPLATE DETAILS</h4>

	<form action="ViewTemplateCode.php" method="POST">
	<table class="mygrid" align="center">
		
		<tr><th>TemplateID</th><th>TemplateName</th><th>Category</th><th>Image</th><th>Delete</th></tr>
		<?php
		$cat='';
		if(isset($_REQUEST['cat']))
		{
		$cat= $_REQUEST['cat'];
		}
		
		if($cat=="")
		{
			
			$qry=mysql_query("select * from TemplateTableByCustomer where Status='Approved'",$con);
		}
		else
			
			{
		
		$qry=mysql_query("select * from TemplateTableByCustomer where Status='Approved' and Category='" . $cat . "'",$con);
			}
		
		While($r = mysql_fetch_array($qry))
		{
			echo "<tr><td>" . $r['TemplateID'] . "</td><td>" . $r['TemplateName'] . "</td><td>" . $r['Category'] . "</td><td><a href='Image/Template/customertemplate/" . $r['Image'] . "'><img src = 'Image/Template/customertemplate/". $r['Image'] . "' Height='60px' Width='90px' /></a></td><td><input type='submit' name='" . $r['TemplateID'] . "' value='Delete' class='btn_delete'/></td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
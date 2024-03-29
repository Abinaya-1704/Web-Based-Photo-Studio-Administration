
<?php
include('HeaderAdmin.php');
?>
	<br/><br/><br/><br/>
	<h4>AVAILABLE TEMPLATE DETAILS</h4>

	<form action="ViewTemplateCode.php" method="POST">
	<table class="mygrid" align="center">
		
		<tr><th>TemplateID</th><th>TemplateName</th><th>Cost</th><th>Category</th><th>Image</th><th>Delete</th></tr>
		<?php
		$cat='';
		if(isset($_REQUEST['cat']))
		{
		$cat= $_REQUEST['cat'];
		}
		
		if($cat=="")
		{
			$query = mysql_query("Select * From TemplateTable",$con);
		}
		else
			
			{
		$query = mysql_query("Select * From TemplateTable Where Category='" . $cat . "'",$con);
			}
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['TemplateID'] . "</td><td>" . $r['TemplateName'] . "</td><td>" . $r['Cost'] . "</td><td>" . $r['Category'] . "</td><td><a href='Image/Template/" . $r['Image'] . "'><img src = 'Image/Template/". $r['Image'] . "' Height='60px' Width='90px' /></a></td><td><input type='submit' name='" . $r['TemplateID'] . "' value='Delete' class='btn_delete'/></td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>


<?php
include('HeaderAdmin.php');
?>
	
	<h4>SELECT TEMPLATE CATEGORY</h4>

	<form action="" method="POST">
	<table class="table table-bordered table-hover table-striped" align="center">
		
		<tr><th>TemplateID</th><th>Template Name</th><th>Cost</th><th>Category</th><th>Image</th><th>VIEW</th></tr>
		<?php
		$query = mysql_query("Select Category From TemplateTable Group By Category",$con);
		While($r = mysql_fetch_array($query))
		{
			$query2 = mysql_query("Select * From TemplateTable Where Category='" . $r['Category'] . "'",$con);
			
			if ($r2 = mysql_fetch_array($query2))
			{
			echo "<tr><td>" . $r2['TemplateID'] . "</td><td>" . $r2['TemplateName'] . "</td><td>" . $r2['Cost'] . "</td><td>" . $r2['Category'] . "</td><td><img src = 'Image/Template/". $r2['Image'] . "' Height='60px' Width='90px' /></td><td><a href='ViewTemplate.php?cat=" . $r2['Category'] . "'/>View Photos</a></td></tr>";
			}
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
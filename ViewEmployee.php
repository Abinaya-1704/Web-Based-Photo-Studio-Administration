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
	
	<h4>EMPLOYEE LIST</h4>

	<form action="ViewEmployeeCode.php" method="POST">
	<table class="table table-bordered table-striped" align="center">
		
		<tr><th>EmpID</th><th>EmpName</th><th>ContactNo</th><th>MailId</th><th>Delete</th></tr>
		<?php
		$query = mysql_query("Select * From EmployeeTable",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['EmpID'] . "</td><td>" . $r['EmpName'] . "</td><td>" . $r['ContactNo'] . "</td><td>" . $r['EmailID'] . "</td><td><input type='submit' name='" . $r['EmpID'] . "' value='Delete' class='btn_delete'/></td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
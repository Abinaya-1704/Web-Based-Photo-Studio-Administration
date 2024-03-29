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
	
	<h4>JOB APPLICATION LIST</h4>

	<form action="ViewEmployeeCode.php" method="POST">
	<table class="table table-bordered table-hover table-striped" align="center">
		
		<tr><th>EmpID</th><th>EmpName</th><th>ContactNo</th><th>Qualification</th><th>Experience</th><th>Current Salary</th><th>Expected Salary</th><th>MailId</th></tr>
		<?php
		$query = mysql_query("Select * From JobTable",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['RefID'] . "</td><td>" . $r['ApplicantName'] . "</td><td>" . $r['ContactNo'] . "</td><td>" . $r['Qualification'] . "</td><td>" . $r['Experience'] . "</td><td>" . $r['CurrentSalary'] . "</td><td>" . $r['ExpectedSalary'] . "</td><td>" . $r['EmailID'] . "</td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
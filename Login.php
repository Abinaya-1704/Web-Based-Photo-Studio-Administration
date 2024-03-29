<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php
include('Header.php');
?>

	<br/>
	<br/>
	<br/>
	<br/>

	<form action="LoginCode.php" method="post">
		<table class="table table-bordered table-hover table-striped" align="center" style='width:500px;'>
			<tr>
				<td><input type="text" name="txtUsername" placeholder=" Username" Style="width:180px; text-align:center;" Required /></td>
			</tr>
			<tr>
				<td><input type="password" name="txtPassword" placeholder=" Password" Style="width:180px; text-align:center;" Required/></td>
			</tr>
			<tr> 
				<td>
					<select Style="width:180px; text-align:center;" name="ddType">
					  <option value="admin">Admin</option>
					  <option value="employee">Employee</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td><br><input type="submit" name="btnSubmit" value="Login" class="btn btn-info" Style="width:180px;"/></td>
			</tr>
		</table>
	</form>


	
</div>
</body>
</html>
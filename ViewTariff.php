
<?php
include('HeaderAdmin.php');
?>
	
	<h4>AVAILABLE TARIFF DETAILS</h4>

	<form action="ViewTariffCode.php" method="POST">
	<table class="mygrid" align="center">
		
		<tr><th>TariffID</th><th>TariffName</th><th>Cost</th><th>Delete</th></tr>
		<?php
		$query = mysql_query("Select * From TariffTable",$con);
		While($r = mysql_fetch_array($query))
		{
			echo "<tr><td>" . $r['TariffID'] . "</td><td>" . $r['TariffName'] . "</td><td>" . $r['Cost'] . "</td><td><input type='submit' name='" . $r['TariffID'] . "' value='Delete' class='btn_delete'/></td></tr>";
		}
		mysql_close($con);
		?>
		
	</table>
	</form>


</div>
</body>
</html>
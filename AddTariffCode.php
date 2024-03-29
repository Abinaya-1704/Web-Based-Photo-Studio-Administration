<?php
include('HeaderAdmin.php');
?>

<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$Cost=$_POST["txtCost"];

	$qry="Insert Into TariffTable Values('". $Id ."','". $Name ."','". $Cost ."')";
	mysql_query($qry,$con) or die(mysql_error());
   	echo "Data Saved Successfully!<br/>";
	echo "<a href='AddTariff.php'>Click here for New Record</a>";
	mysql_close($con);
?>
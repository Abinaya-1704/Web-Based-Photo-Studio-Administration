<?php
include('HeaderAdmin.php');
?>

<?php
session_start();
	include('Db.php');
	
	$BookingID=$_SESSION["id"];
	
	$Temp=$_POST["txttempCharge"];
	$TotalCost=$_POST["txtCharge"];
	$Status=$_POST["ddStatus"];
	$qry="Update BookingTable Set Status = '". $Status ."',PhotographyCharges='".$Temp."', TotalCharge = '". $TotalCost ."' Where BookingID = '". $BookingID ."'";
	mysql_query($qry,$con) or die(mysql_error());
   	mysql_close($con);
   	header('location:update.php');
?>
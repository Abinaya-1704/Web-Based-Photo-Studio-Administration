<?php
	include('HeaderAdmin.php');
	session_start();
?>

<?php
	include('Db.php');
	
	$BookingID=$_POST["ddBooking"];
	$EmployeeID=$_POST["ddEmployee"];

	$qry="Update BookingTable Set EmpID = '". $EmployeeID ."' Where BookingID = '". $BookingID ."' ";
	mysql_query($qry,$con) or die(mysql_error());

   	echo "<br/><br/><br/><p>Employee Alloted Successfully!<br/>";
	mysql_close($con);
?>
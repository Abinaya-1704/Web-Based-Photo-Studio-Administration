<?php
include('HeaderAdmin.php');
?>

<?php
	include('Db.php');
	
	$Id=$_POST["txtId"];
	$Name=$_POST["txtName"];
	$ContactNo=$_POST["txtContactNo"];
	$MailId=$_POST["txtEMailId"];
	$Password=$_POST["txtPassword"];
	
	$qry="Insert Into EmployeeTable Values('". $Id ."','". $Name ."','". $ContactNo ."','". $MailId ."','". $Password ."')";
	mysql_query($qry,$con) or die(mysql_error());
	mysql_close($con);
 	header('location:ViewEmployee.php');
?>
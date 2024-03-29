<?php
include('Header.php');
?>

<?php
	include('Db.php');
	$qry=mysql_query("select count(*) as cnt from jobtable",$con);
	$r=mysql_fetch_array($qry);
	$Id=$r['cnt']+1;
	$PersonName=$_POST["txtName"];
	
	
	$JT=$_REQUEST["txtJT"];
	$ContactNo=$_REQUEST["txtContactNo"];
	$Q=$_REQUEST["txtQ"];
	$E=$_REQUEST["txtE"];
	$CS=$_REQUEST["txtCS"];
	$ES=$_REQUEST["txtES"];
	
	
	
	$MailId=$_REQUEST["txtEMailId"];
	
	/*echo "<br/><br/><br/><br/><br/><br/><br/>";
	echo $CS;
	echo $ES;
	return;
*/	
	$qry="Insert Into JobTable Values('". $Id ."','". $PersonName ."','". $JT ."','" . $ContactNo ."','". $Q ."','". $E ."','". $CS ."','". $ES ."','". $MailId ."')";
	echo "<br/><br/><br/><br/><br/><br/><br/>";
	
	mysql_query($qry,$con) or die(mysql_error());
	mysql_close($con);
	echo "<script>alert('Application Saved.');</script>";
 	header('location:Home.php');
?>
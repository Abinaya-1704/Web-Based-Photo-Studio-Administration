<?php
include('Header.php');
session_start();
?>

<?php
	include('Db.php');
	
	$BookingID=$_POST["txtId"];
	$Tariff=$_POST["ddTariff"];
	$Cus=$_POST["txtCus"];
	$Event=$_POST["txtEvent"];
	$Address=$_POST["txtAddress"];
	$Date=$_POST["txtDate"];
	$ContactNo=$_POST["txtContactNo"];
	$EmailID = $_POST["txtEmailID"];
	$file_name2 = "";
	
		if(isset($_FILES['fileUploader']))
	{
		$nameforExt2 = $_FILES['fileUploader']['name'];
		$ext2 = pathinfo($nameforExt2, PATHINFO_EXTENSION);
        
        $file_name2 = $BookingID. '.' . $ext2;
        $file_tmp2 =$_FILES['fileUploader']['tmp_name'];
        move_uploaded_file($file_tmp2,"Image/Template/".$file_name2);
	}

	//$queryTmp= "Select Cost From TariffTable";
	if($Tariff==0)
{
$Cost=0;
}
else
{
	$queryTmp= "Select Cost From TemplateTable Where TemplateId='" . $Tariff . "'";
		$Cost = mysql_fetch_object(mysql_query($queryTmp))->Cost;
}

	$qry="Insert Into BookingTable Values('". $BookingID ."','". $Tariff ."','". $Cus ."','". $Event ."','". $Address ."','". $Date ."','". $ContactNo ."','". $EmailID ."','". $Cost ."',0,'". $Cost ."','".$file_name2."','PENDING','')";
	mysql_query($qry,$con) or die(mysql_error());

   	echo "<br/><br/><br/><p>Booking Successfully!<br/>Booking Code:</p><h2>" . $BookingID . "</h2>";
	mysql_close($con);
?>